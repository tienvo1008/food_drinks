<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequets extends FormRequest
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
            'txtCateName' => 'required|unique:categories,name',
        ];
    }
    public function messages()
    {
        return [
            'txtCateName.required'=> trans('category.place_cate_name'),
            'txtCateName.unique'=> trans('category.uniqueName'),
        ];
    }
}
