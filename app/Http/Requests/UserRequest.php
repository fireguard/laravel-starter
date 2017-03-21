<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'function' => 'max:255',
            'image' => 'image|dimensions:min_width=100,min_height=100'
        ];

        if ($this->method() == 'PUT') {
            unset($rules['password']);
            $rules['email'] = 'required|email|max:255|unique:users,email,'.$this->route('id');
        }

        return $rules;
    }
}
