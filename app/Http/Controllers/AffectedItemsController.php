<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Affected;
use App\AffectedItem;
use App\Address;
use Carbon\Carbon;

class AffectedItemsController extends Controller
{

    public function create(Request $request)
    {
        $item = new AffectedItem();
        $item->affected_id = $request->affected_id;
        $item->type = $request->type;
        $item->name = "...";
        $item->isValid();

        if (!$item->save()) {
            return redirect()
                ->action('AffectedController@view', ['id' => $item->affected_id])
                ->withErrors($item->getErrors())
                ->withInput();
        }

        return redirect()
            ->action('AffectedController@view', ['id' => $item->affected_id]);
    }

    public function store(Request $request)
    {
        //dd($request);

        $user = Auth::user();

        $affected = new Affected();
        $affected->user_id = $user->id;
        $affected->ahv_number = $request->ahv_number;
        $affected->birth_date = Carbon::parse($request->birth_date);
        $affected->save();

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

