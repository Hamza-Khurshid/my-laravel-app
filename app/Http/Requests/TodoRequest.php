<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // true if want to autherize this request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'column-name': 'required | min/max | data type'
            'title' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'userId' => 'required',
            'isComplated' => 'required|boolean'
        ];
    }
}
