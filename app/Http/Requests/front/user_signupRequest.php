<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class user_signupRequest extends FormRequest
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
            'name'=>"required",
            'phone'=>'required|unique:users|unique:Admins',
            'active'=>'required',
            'password'=>"required",//|min:8
            'adress'=>"required",

        ];
    }
    // ################ massage ###########
    public function massage(){[

            'name'=>"Please , fill out this field ",
            'email'=>"Please ,fill correct data'Example@example.com' ",
            'password'=>"Passord, shoud be more than 6 numbers",//|min:8
            'adress'=>"Please , fill this field",
            'phone'=>"Please , fill out this field",
    ];
    }
}
