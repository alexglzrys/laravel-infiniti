<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStoreRequest extends FormRequest
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
            'name'   => 'required|min:3|max:100',
            'email'  => 'required|email|max:191|unique:information,email',
            'phone'  => 'required|numeric|digits_between:10,13',
            'agency' => 'required|numeric',
        ];
    }
}
