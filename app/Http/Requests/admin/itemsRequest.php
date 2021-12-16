<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class itemsRequest extends FormRequest
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
            // 'photo'=>'required_without:id',
            'photo'=>'nullable',
            'name'=>'required',
            'price'=>'required',
            'descrption'=>'required',
            'sale'=>'nullable'
// =======================test =======================

        // 'photo'=>'required_without:id',
        // 'name'=>'required',
        // 'price'=>'required',
        // 'category'=>'required',
        // 'active'=>'required',
        // 'descrption'=>'required',
        // 'sale'=>'nullable'

        ];
    }

    public function message(){
        return [
            'photo'=>'photo failed is required',
            'name'=>'name failed is required',
            'price'=>'price failed is required',
            'category'=>'category name failed is required',
            'active'=>'active failed is required',
            'descrption'=>'descrption failed is required'


        ];
    }
}
