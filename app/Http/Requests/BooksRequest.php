<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'title' => 'required|min:5|max:255',
             'ibsn' => 'required',
             'author' => 'required|min:5|max:255',
             'price' => 'required',
             'category' => 'required|min:3|max:255'

        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Please provide valid name which is between 5 and 255 characters.',
            'isbn.required' => 'Please provide valid name isbn number.',
            'author.required'=>'Please provide valid author name which is between 5 and 255 characters.',
            'price.required'=>'Please provide valid price.',
            'category.required'=>'Please provide valid category name which is between 5 and 255 characters.'
        ];
    }
}
