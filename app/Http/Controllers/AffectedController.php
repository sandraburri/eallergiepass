<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Uuid;
use Illuminate\Http\Request;
use App\User;
use App\Affected;
use App\Address;
use App\AffectedItem;
use App\AhvNumber;

class AffectedController extends Controller
{
    public function view($id)
    {
        $affected = Affected::where("id", $id)->first();
        $address = Address::where("user_id", $affected->user_id)->first();

        return view('affected/view', [
            'affected' => $affected,
            'address' => $address
        ]);
    }

    public function items($id)
    {
        $affected = Affected::where("id", $id)->first();
        $address = Address::where("user_id", $affected->user_id)->first();

        $affectedItems = [
            'allergy' => [],
            'intolerance' => [],
            'incompatibility' => []
        ];
        foreach (AffectedItem::where("affected_id", $affected->id)->get() as $item)
        {
            array_push($affectedItems[$item->type], $item);
        }

        $qrCode = \App\QrCode::getAffected($affected, 100);

        return view('affected/items', [
            'qrCode' => $qrCode,
            'affected' => $affected,
            'affectedItems' => $affectedItems,
            'address' => $address,
            'verificationBy' => [
                'Anamnese',
                'Klinik',
                'Hauttest',
                'Epikutantest',
                'IgE-Antikörper',
                'Provokation',
                'Zelluläre Teste'
            ]
        ]);
    }

    public function create(Request $request)
    {
        $careProviderUser = Auth::user();
        $careProvider = $careProviderUser->careProvider;
        $careProviderId = $careProvider->id;
        if (!$careProviderId) {
            abort(404, "CareProvider not found.");
        }

        $ahv_number = $request->ahv_number;
        if (!AhvNumber::isValid($ahv_number)) {
            return redirect()
                ->route('home')
                ->withErrors(["ahv_number" => "invalid"])
                ->withInput();
        }

        $userId = (string)Uuid::generate();
        $user = new User();
        $user->name = $userId;
        $user->email = $userId;
        $user->password = bcrypt($userId);
        $user->save();

        if (!$user->save()) {
            return redirect()
                ->route('home')
                ->withErrors($address->getErrors())
                ->withInput();
        }

        $affected = new Affected();
        $affected->user_id = $user->id;
        $affected->unique_id = $userId;
        $affected->ahv_number = $ahv_number;
        $affected->care_provider_id = $careProviderId;
        $affected->save();

        if (!$affected->save()) {
            return redirect()
                ->route('home')
                ->withErrors($affected->getErrors())
                ->withInput();
        }

        return redirect()->action('AffectedController@view', ['id' => $affected->id]);
    }

    public function search(Request $request)
    {
        $ahv_number = $request->ahv_number;
        if (!AhvNumber::isValid($ahv_number)) {
            return redirect()
                ->route('home')
                ->withErrors(["ahv_number" => "Bitte geben Sie eine gültige AHV-Nummer ein."])
                ->withInput();
        }

        $affected = Affected::where("ahv_number", $ahv_number)->first();

        if (!$affected) {
            return redirect()
                ->route('home')
                ->withErrors(['ahv_number' => "Patient nicht gefunden"])
                ->withInput();
        }

        return redirect()->action('AffectedController@view', ['id' => $affected->id]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $affected = Affected::where("id", $request->affected_id)->first();
        if (!$affected) {
            return redirect()
                ->back()
                ->withErrors($errors)
                ->withInput($input);
        }

        $affected->ahv_number = $request->ahv_number;
        $affected->birth_date = Carbon::parse($request->birth_date);
        $affected->isValid();

        $address = null;
        if ($request->address_id) {
            $address = Address::where("id", $request->address_id)->first();
        } else {
            $address = new Address();
            $address->user_id = $affected->user_id;
        }

        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->street = $request->street;
        $address->street_number = $request->street_number;
        $address->zip = $request->zip;
        $address->city = $request->city;
        $address->phone_number = $request->phone_number;
        $address->isValid();

        $input = $request->toArray();
        $errors = $affected->getErrors()->merge($address->getErrors());

        if (!$errors->isEmpty()) {
            return redirect()
                ->back()
                ->withErrors($errors)
                ->withInput($input);
        }

        if (!$affected->save()) {
            return redirect()
                ->back()
                ->withErrors($errors)
                ->withInput($input);
        }

        if (!$address->save()) {
            return redirect()
                ->back()
                ->withErrors($address->getErrors())
                ->withInput($input);
        }

        return redirect()->action('AffectedController@items', ['id' => $affected->id]);
    }
}
