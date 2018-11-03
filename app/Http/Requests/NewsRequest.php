<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
	        'title' => 'required',
	        'category_id' => 'required',
	        'body' => 'required',
	        'photos.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'

        ];
    }

	public function messages()
	{
		return [
			'title.required' => 'Please enter title.',
			'category_id.required' => 'Please select category.',
			'body.required' => 'Please enter news description.',
			'photos.*.mimes' => 'Photo type must be: jpeg,png,jpg,gif,svg',
			'photos.*.max' => 'A photo must be less than 5 MB',
		];
	}
}
