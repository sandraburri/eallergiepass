<?php

    //This is the controller for the medical practice
    //registration of the care provider.

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\CareProvider;
use App\Address;

class CareProviderController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $careprovider = new CareProvider();
        $careprovider->user_id = $user->id;
        $careprovider->name = $request->name;
        $careprovider->title = $request->title;
        $careprovider->discipline = $request->discipline;
        $careprovider->isValid();

        $address = new Address();
        $address->user_id = $user->id;
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->street = $request->street;
        $address->street_number = $request->street_number;
        $address->zip = $request->zip;
        $address->city = $request->city;
        $address->phone_number = $request->phone_number;
        $address->isValid();

        $input = $request->toArray();
        $errors = $careprovider->getErrors()->merge($address->getErrors());

        if (!$errors->isEmpty()) {
            return redirect()
                ->route('home')
                ->withErrors($errors)
                ->withInput($input);
        }

        if (!$careprovider->save()) {
            return redirect()
                ->route('home')
                ->withErrors($errors)
                ->withInput($input);
        }

        if (!$address->save()) {
            return redirect()
                ->route('home')
                ->withErrors($errors)
                ->withInput($input);
        }

        return redirect()
            ->route('home')
            ->withSuccess("Your address was saved successfully.");

    }
}