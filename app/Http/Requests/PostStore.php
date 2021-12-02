<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStore extends FormRequest
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
            //
            'publication' => 'required|min:3|max:60',
            'publication_description' => 'required|min:3|max:300'
            // 'state' => 'required',
            // 'category_id' => 'required'
        ];
    }
}
