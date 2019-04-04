<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\CareProvider;
use App\Address;

class CareProviderController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);

    //Hier muss unbedingt noch programmiert werden,
    //dass das Formular nach dem Speichern auch ausgefüllt bleibt.
    //Falls der LE zu einem späteren Zeitpunkt in diesem Formular Korrekturen
    // vornehmen will, muss er sehen was eingegeben wurde.

        $user = Auth::user();

        $careprovider = new CareProvider();
        $careprovider->user_id = $user->id;
        $careprovider->name = $request->name;
        $careprovider->title = $request->title;
        $careprovider->discipline = $request->discipline;
        $careprovider->save();

        $address = new Address();
        $address->user_id = $user->id;
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->street = $request->street;
        $address->street_number = $request->street_number;
        $address->zip = $request->zip;
        $address->city = $request->city;
        $address->phone_number = $request->phone_number;

        $address->save();

        return redirect('home');
    }
}
