<?php

namespace App\Http\Controllers;

use App\Affected;
use App\AffectedItem;
use App\Fhir\AffectedConverter;


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

        $fhirPatient = AffectedConverter::convert($affected);

        $fhirAffectedItems = [
            'allergy' => [],
            'intolerance' => [],
            'incompatibility' => []
        ];

        foreach (AffectedItem::where("affected_id", $affected->id)->get() as $item)
        {
            $fhirAffectedItem = [
                "type" => __($item->type),
                "name" => $item->name,
                "symptoms" => $item->symptoms,
                "verification" => optional($item->verification)->format("d.m.Y"),
                "medication" => $item->medication,
                "emergency_medication" => $item->emergency_medication,
                "suspicion" => $item->suspicion
            ];

            $fhirAffectedItems[$item->type][] = $fhirAffectedItem;
        }

        $careProvider = $affected->careProvider;
        if (!$careProvider) {
            abort(404, "CareProvider not found.");
        }

        $address = $careProvider->user->address;
        if (!$address) {
            abort(404, "CareProvider.Address not found.");
        }

        $fhirCareProvider = [
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
            "fhirPatient" => $fhirPatient,
            "careProvider" => $fhirCareProvider,
            "affectedItems" => $fhirAffectedItems
        ];

        return response()->json($data);
    }
}




