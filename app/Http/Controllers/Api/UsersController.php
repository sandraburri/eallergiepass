<?php

namespace App\Http\Controllers\Api;

use Auth;
use Illuminate\Http\Request;
use App\Affected;
use App\AffectedItem;

class UsersController extends \App\Http\Controllers\Controller
{
    public function index(Request $request) 
    {
        $id = $request->id;

        $affected = Affected::where("unique_id", $id)->first();
        if (!$affected) {
            abort(404, "User '$id' not found.");
        }

        $address = $affected->user->address;
        $jsonAffected = [
            "ahv_number" => $affected->ahv_number,
            "birth_date" => $affected->birth_date->format("dd.MM.yyyy"),
            "street" => $address->street
        ];
        
        $jsonAffectedItems = [
            'allergy' => [],
            'intolerance' => [],
            'incompatibility' => []
        ];

        foreach (AffectedItem::where("affected_id", $affected->id)->get() as $item)
        {
            $jsonAffectedItem = [
                "type" => __($item->type),
                "name" => $item->name
            ];

            $jsonAffectedItems[$item->type][] = $jsonAffectedItem;
        }
        
        $careProvider = $affected->careProvider;
        $address = $careProvider->user->address;

        $jsonCareProvider = [
            "title" => $careProvider->title,
            "street" => $address->street
        ];

        $data = [
            "affected" => $jsonAffected,
            "careProvider" => $jsonCareProvider,
            "affectedItems" => $jsonAffectedItems
        ];

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}
