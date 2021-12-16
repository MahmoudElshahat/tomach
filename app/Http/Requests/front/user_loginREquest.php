<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class user_loginREquest extends FormRequest
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
            'phone'=>"required|numeric",
            'password'=>"required",
        ];
    }
    // ############## massages ################endregion
    public function massage(){[
        'email'=>"Please ,fill correct data'Example@example.com' ",
        'password'=>"Passord, shoud be more than 6 numbers",
    ];

    }
}
