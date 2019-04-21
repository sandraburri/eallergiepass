<?php

namespace App\Http\Controllers;

use App\Affected;
use App\AffectedItem;

class MidataController extends Controller
{
    public function export($id)
    {
        $affected = Affected::where("id", $id)->first();
        if (!$affected) {
            abort(404, "User '$id' not found.");
        }

        $address = $affected->user->address;
        if (!$address) {
            abort(404, "Affected.Address not found.");
        }

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
        if (!$careProvider) {
            abort(404, "CareProvider not found.");
        }

        $address = $careProvider->user->address;
        if (!$address) {
            abort(404, "CareProvider.Address not found.");
        }

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

