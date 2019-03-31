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

        $user = Auth::user();

        $careprovider = new CareProvider();
        $careprovider->user_id = $user->id;
        $careprovider->name = $request->name;
        $careprovider->title = $request->title;
        $careprovider->discipline = $request->discipline;
        $careprovider->save();

        $address = new Address();
        $address->user_id = $user->id;
        $address->firstName = $request->firstName;
        $address->lastName = $request->lastName;
        $address->street = $request->street;
        $address->streetNumber = $request->streetNumber;
        $address->zip = $request->zip;
        $address->city = $request->city;
        $address->phoneNumber = $request->phoneNumber;

        $address->save();

        return redirect('home');
    }
}
