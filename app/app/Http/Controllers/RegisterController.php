<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PeopleRequest;
use App\Http\Controllers\Controller;

use App\Models\Code;
use App\Models\People;

class RegisterController extends Controller
{

    public function index()
    {
        $people = People::all();
        return view('welcome', compact('people'));
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

    public function store(PeopleRequest $request)
    {
        try {
            if ( $this->verify_save_code($request->code) ) {
                $code_id = Code::where('code', $request->code)->firstOrFail();

                $person = new People;
                $person->name = $request->name;
                $person->email = $request->email;
                $person->phone = $request->phone;
                $person->semester = $request->semester;
                $person->plan = $request->plan;
                $person->course = $request->course;
                $person->code_id = $code_id->id;

                $person->save();

                $code_id->state = true;
                $code_id->save();

                return redirect('/')->with('success', 'Registrado correctamente');
            } else {
                throw new \Exception('Error');
            }
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'No se pudo realizar el registro');
        }


    }

    private function verify_save_code($code)
    {
        $number = Code::where('code', $code)->where('state', false)->count();

        if ( $number > 0) {
            return true;
        } else {
            return false;
        }
    }

}
