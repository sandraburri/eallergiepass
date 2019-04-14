<?php

namespace App\Http\Controllers\Api;

use Auth;
use Illuminate\Http\Request;
use App\Affected;
use App\AffectedItem;
use App\Address;
use Carbon\Carbon;
use Exception;

class UsersController extends \App\Http\Controllers\Controller
{
    public function index(Request $request) {

        $user = $request->user;
        $id = $request->id;

        $affected = Affected::where("unique_id", $id)->first();
        if (!$affected) {
            abort(404, "User '$id' not found.");
        }

        return response()->json([
            'success' => true,
            'data' => $affected
        ]);
    }
}
