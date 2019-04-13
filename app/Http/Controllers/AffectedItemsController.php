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
                ->action('AffectedController@items', ['id' => $item->affected_id])
                ->withErrors($item->getErrors())
                ->withInput();
        }

        return redirect()
            ->action('AffectedController@items', ['id' => $item->affected_id]);
    }

    public function store(Request $request)
    {
        //dd($request);

        // für Rebecca, hier alles programmieren analog zu CareProviderController
        // Hier nur Items beachten....
        // Speichern und Fehler werfen....
    }
}

