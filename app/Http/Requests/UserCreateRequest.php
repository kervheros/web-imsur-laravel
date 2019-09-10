<?php

namespace IMSUR\Http\Requests;

use IMSUR\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'name'=>'required|regex:/^[A-Z]+$/',
            'email'=>'required|email|unique:users',
            'password' => 'required|min:6|regex:^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,16}$^',
            //'ci' => 'required|regex:/^[0-9]+$/',
            'ci' => 'required|integer',
            'cod_prov' => 'required',



        ];
    }

    public function messages(){
        return[
          'name.required'=>'se requiere de un nombre y de apellido paterno',
          'name.regex' => 'El campo apellido paterno y nombre solo admite mayusculas',

          'email.email'=>'El formato del correo es inavalido',
          'email.unique' => 'El correo ya se encuentra registrado',

          'password.min'=>'La contraseña deve tener mas de 6 caracteres',
          'password.regex' => 'El formato de la contraseña es invalido',

          'ci.integer'=>'El campo ci solo admite numeros',
          'ci.required' => 'El campo ci es obligatorio',

          'cod_prov.required' => 'El campo codigo proveedor es obligatorio '

        ];
    }
}
