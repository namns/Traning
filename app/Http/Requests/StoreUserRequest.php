<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreUserRequest extends Request
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
            'username' => 'required|unique:user',
            'password' => 'required',
            'fullname' => 'required'
        ];

    }
    public function merge(array $input)
    {
        return [
            'username.unique' => 'username already exists',
            'username.required' => 'Please enter username',
            'password.required' => 'Please enter password',
            'fullname.required' => 'Please enter fullname',
        ];

    }
}
