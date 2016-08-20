<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PeopleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required|min:8',
            'semester'  => 'required|in:Primero,Segundo,Tercero,Cuarto,Quinto,Sexto,Septimo,Octavo,Noveno,Decimo,Onceavo,Doceavo',
            'plan'      => 'required|in:Diario,Fin de Semana',
            'course'    => 'required',
            'code'      => 'required'
        ];
    }
}
