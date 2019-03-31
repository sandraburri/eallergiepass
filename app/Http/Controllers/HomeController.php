<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
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
        $address = Address::where("user_id", $user->id)->first();

        return view('home', [
            'careProvider' => $careProvider,
            'address' => $address,
        ]
    );
    }
}
