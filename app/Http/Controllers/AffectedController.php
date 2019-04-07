<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Affected;
use App\Address;
use App\AffectedItem;
use Carbon\Carbon;

class AffectedController extends Controller
{
    public function view($id)
    {
        $affected = Affected::where("id", $id)->first();
        $address = Address::where("user_id", $affected->user_id)->first();
        $affectedItems = AffectedItem::where("affected_id", $affected->id)->get()->groupBy('type');

        return view('affected/view', [
            'affected' => $affected,
            'affectedItems' => $affectedItems,
            'address' => $address,
        ]);
    }

    public function search(Request $request)
    {
        $ahv_number = $request->ahv_number;
        $affected = Affected::where("ahv_number", $ahv_number)->first();

        if (!$affected) {
            return redirect()
                ->route('home')
                ->withErrors(['searchError' => "Not found"])
                ->withInput();
        }

        return redirect()->action('AffectedController@view', ['id' => $affected->id]);
    }

    public function store(Request $request)
    {
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

        if (!$address->save()) {
            return redirect()
                ->route('home')
                ->withErrors($address->getErrors())
                ->withInput();
        }

        return redirect()
            ->route('home', $address->id)
            ->withSuccess("Your post was saved successfully.");
    }
}
