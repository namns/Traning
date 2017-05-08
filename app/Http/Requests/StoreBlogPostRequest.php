<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPostRequest extends Request
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
                'code' => 'required',
                'title' => 'required',
                'despction' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'code k duoc bo trong',
            'title.required' => 'tieu de k dc bo rong',
            'despction.required' => 'noi dung k dc bo trong',
        ];
    }
}
