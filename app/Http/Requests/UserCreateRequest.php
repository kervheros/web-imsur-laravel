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
            'name'=>'required',
            'email'=>'required|unique:users',
            'password' => 'required|min:6|regex:^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,16}$^',




        ];
    }

    public function messages(){
        return[
          'name.required'=>'se requiere de un nombre y de apellido paterno',
          //'email.required'=>'el e-mail ya se encunetra registrado',
          //'password.required'=>'la contraseña deve contener almenos una mayuscula'

        ];
    }
}
