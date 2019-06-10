<?php

    //This is the controller so that the first view for the
    //care provider is displayed correctly.

namespace App\Http\Controllers;

use Auth;
use App\CareProvider;
use App\Address;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $careProvider = CareProvider::where("user_id", $user->id)->first();
        if (!$careProvider) {
            $careProvider = new CareProvider();
        }

        $address = Address::where("user_id", $user->id)->first();
        if (!$address) {
            $address = new Address();
        }

        return view('home', [
            'careProvider' => $careProvider,
            'address' => $address,
            'careProviderTitle' => [
                'Dr. med.',
                'Prof. Dr. med.',
                'med. pract.',
                'PD Dr. med.'
            ]
        ]
    );
    }
}