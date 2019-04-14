<?php

namespace App\Http\Controllers;

use Auth;
use App\Affected;
use App\Address;
use App\CareProvider;


class PdfController extends Controller
{
    public function index($id) {
        $data = $this->getData($id);

        view()->share($data);
        $pdf = \Barryvdh\DomPDF\Facade::loadview('pdf\view');
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('slip_out.pdf');
    }

    public function html($id) {
        $data = $this->getData($id);

        return view('pdf/view', $data);
    }

    public function getData($id) {
        $user = Auth::user();
        
        $careprovider = CareProvider::where("user_id", $user->id)->first();
        $careprovider->address = Address::where("user_id", $careprovider->user_id)->first();

        $affected = Affected::where("id", $id)->first();
        $affected->address = Address::where("user_id", $affected->user_id)->first();

        $data = [
            "affected" => $affected,
            "careprovider" => $careprovider
        ];

        //dd($data);

        return $data;
    }
}

