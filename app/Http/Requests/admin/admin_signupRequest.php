<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin;

use App\Models\User;


// requests


class admin_signupRequest extends FormRequest
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
                'phone'=>'required',//|unique:users|unique:Admins
                'password'=>'required',
                'active'=>'required'

        ];
    }
    // ##############
    public function massage(){[
        'name'=>'name is required',
        'phone'=>'phone is required',
        'password'=>'password is required',

    ];}
}
