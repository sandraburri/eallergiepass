<?php

namespace App\Http\Controllers;

use Auth;
use App\Affected;
use App\Address;
use App\CareProvider;
use App\AffectedItem;

class PdfController extends Controller
{
    public function index($id) {
        $data = $this->getData($id);

        $pdf = \PDF::loadview('pdf.view', $data);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('slip_out.pdf');
    }

    public function html($id) {
        $data = $this->getData($id);

        return view('pdf.view', $data);
    }

    public function getData($id) {
        $user = Auth::user();

        $careprovider = CareProvider::where("user_id", $user->id)->first();
        $careprovider->address = $careprovider->user->address;

        $affected = Affected::where("id", $id)->first();
        $affected->address = $affected->user->address;

        $affectedItems = [
            'allergy' => [],
            'intolerance' => [],
            'incompatibility' => []
        ];

        foreach (AffectedItem::where("affected_id", $affected->id)->get() as $item)
        {
            $affectedItems[$item->type][] = $item;
        }

        $data = [
            "affected" => $affected,
            "careprovider" => $careprovider,
            "affectedItems" => $affectedItems
        ];

        //dd($data);

        return $data;
    }
}

