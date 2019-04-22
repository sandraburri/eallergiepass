<?php

// This is the controller so that the first view for the
// care provider is displayed correctly.

namespace App\Http\Controllers;

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
        $item = AffectedItem::where("id", $request->id)->first();
        if (!$item) {
            return redirect()
                ->back()
                ->withErrors(["id" => "Id nicht gefunden"])
                ->withInput();
        }

        $verification = $request->verification;
        $verification = $verification == null ? null : Carbon::parse($verification);

        $item->name = $request->name;
        $item->verification = $verification;
        $item->verified_by = $request->verified_by;
        $item->suspicion = $request->suspicion ? 1 : 0;
        $item->symptoms = $request->symptoms;
        $item->medication = $request->medication;
        $item->emergency_medication = $request->emergency_medication;
        $item->isValid();

        $input = $request->toArray();

        if (!$item->save()) {
            return redirect()
                ->action('AffectedController@items', ['id' => $item->affected_id])
                ->withErrors($item->getErrors())
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