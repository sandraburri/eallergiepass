<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\AffectedItem;
use Carbon\Carbon;

class AffectedItemsController extends Controller
{

    public function create(Request $request)
    {
        $item = new AffectedItem();
        $item->affected_id = $request->affected_id;
        $item->type = $request->type;
        $item->isValid();

        if (!$item->save()) {
            return redirect()
                ->action('AffectedController@items', ['id' => $item->affected_id])
                ->withErrors($item->getErrors())
                ->withInput();
        }

        return redirect()
            ->action('AffectedController@items', ['id' => $item->affected_id]);
    }

    public function store(Request $request)
    {

        //"_token" => "kfWk8h4ngkRsw6vv7dUFLXnisRrNT9i7QRUGOhJm"
        //   "name" => "Bienengift"
        //   "symptoms" => "Atemnot"
        //   "verification" => "2018-06-22"
        //   "verified_by" => "Klinik"
        //   "medication" => null
        //   "emergency_medication" => "Kortison"
        //   "type" => "allergy"
        //   "id" => "1"
        //   "submit" => null
        $user = Auth::user();

        $item = AffectedItem::where("id", $request->id)->first();
        if (!$item) {
            return redirect()
                ->back()
                ->withErrors(["id" => "Id nicht gefunden"])
                ->withInput();
        }

        $item->name = $request->name;
        $item->verification = Carbon::parse($request->verification);
        $item->verified_by = $request->verified_by;
        $item->suspicion = $request->suspicion?1:0;
        $item->symptoms = $request->symptoms;
        $item->medication = $request->medication;
        $item->emergency_medication = $request->emergency_medication;
        $item->isValid();

        $input = $request->toArray();

        if (!$item->save()) {
            return redirect()
                ->action('AffectedController@items', ['id' => $item->affected_id])
                ->withInput($input);
        }

        return redirect()
            ->action('AffectedController@items', ['id' => $item->affected_id]);
    }

    public function delete(Request $request)
    {

        $item = AffectedItem::where("id", $request->id)->first();
        if (!$item) {
            return redirect()
                ->back()
                ->withErrors(["id" => "Id nicht gefunden"])
                ->withInput();
        }

        $item->delete();

        return redirect()
            ->action('AffectedController@items', ['id' => $item->affected_id]);
    }
}
