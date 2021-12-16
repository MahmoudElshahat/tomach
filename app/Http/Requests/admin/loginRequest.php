<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'phone' => 'required',
            'password' => 'required',
        ];
    }
    public function massages()
    {
        return [
            'phone' => 'phone,please insert corect numer',
            'password' => 'pleas,insert correct number'
        ];
    }
}
