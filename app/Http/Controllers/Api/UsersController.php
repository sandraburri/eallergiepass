<?php

namespace App\Http\Controllers\Api;

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
            "birth_date" => $affected->birth_date->format("d.m.Y"),
            "phone_number" => $address->phone_number,
            "first_name" => $address->first_name,
            "last_name" => $address->last_name,
            "street" => $address->street,
            "street_number" => $address->street_number,
            "zip" => $address->zip,
            "city" => $address->city
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
                "name" => $item->name,
                "symptoms" => $item->symptoms,
                "verification" => optional($item->verification)->format("d.m.Y"),
                "medication" => $item->medication,
                "emergency_medication" => $item->emergency_medication,
                "suspicion" => $item->suspicion
            ];

            $jsonAffectedItems[$item->type][] = $jsonAffectedItem;
        }
        
        $careProvider = $affected->careProvider;
        $address = $careProvider->user->address;

        $jsonCareProvider = [
            "title" => $careProvider->title,
            "name" => $careProvider->name,
            "discipline" => $careProvider->discipline,
            "phone_number" => $address->phone_number,
            "first_name" => $address->first_name,
            "last_name" => $address->last_name,
            "street" => $address->street,
            "street_number" => $address->street_number,
            "zip" => $address->zip,
            "city" => $address->city
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
