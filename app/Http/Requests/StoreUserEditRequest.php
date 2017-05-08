<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class StoreUserEditRequest extends Request
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
        $id = Input::get('id');
        return [
            'username' => 'required|unique:user,username,'.$id,
            'fullname' => 'required'
        ];

    }
    public function merge(array $input)
    {
        return [
            'username.unique' => 'username already exists',
            'username.required' => 'Please enter username',
            'fullname.required' => 'Please enter fullname',
        ];

    }
}
