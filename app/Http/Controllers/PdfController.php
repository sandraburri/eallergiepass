<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affected;
use App\Address;

class PdfController extends Controller
{
    public function index($id) {

        $affected = Affected::where("id", $id)->first();
        $address = Address::where("user_id", $affected->user_id)->first();

        $data = [
            "blubb" => "test",
            "affected" => $affected,
            "address" => $address
        ];

        view()->share($data);
        $pdf = \Barryvdh\DomPDF\Facade::loadview('pdf\view');
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('slip_out.pdf');
    }

    public function html($id) {

        $affected = Affected::where("id", $id)->first();
        $address = Address::where("user_id", $affected->user_id)->first();

        $data = [
            "blubb" => "test",
            "affected" => $affected,
            "address" => $address
        ];

        return view('pdf/view', $data);
    }
}

