<?php

    //This is the controller so that the data that appears in the
    //PDF for the care provider can be uploaded to MIDATA (simulated EPD).

namespace App\Http\Controllers;

use App\Affected;
use App\AffectedItem;
use App\Fhir\AffectedConverter;
use App\Fhir\CareProviderConverter;
use App\Fhir\AffectedItemsConverter;


class MidataController extends Controller
{
    public function export($id)
    {
        $affected = Affected::where("id", $id)->first();
        if (!$affected) {
            abort(404, "Affected '$id' not found.");
        }

        $fhirPatient = AffectedConverter::convert($affected);

        $careProvider = $affected->careProvider;
        $fhirOrganization = CareProviderConverter::convert($careProvider);

        $fhirAllergyIntolerance = [];
        foreach (AffectedItem::where("affected_id", $affected->id)->get() as $item)
        {
            $fhirAllergyIntolerance[] = AffectedItemsConverter:: convert($item);
        }

        $data = [
            "fhirPatient" => $fhirPatient,
            "fhirOrganization" => $fhirOrganization,
            "fhirAllergyIntolerance" => $fhirAllergyIntolerance
        ];

        return response()->json($data);
    }
}