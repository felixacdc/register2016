<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Code;

class RegisterController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function verify_code(Request $request)
    {
        $number = Code::where('code', $request->code)->where('state', false)->count();

        if ( $number > 0) {
            return "ok";
        } else {
            return "error";
        }
    }

    public function store(Request $request)
    {
        dd($request);
    }

}
