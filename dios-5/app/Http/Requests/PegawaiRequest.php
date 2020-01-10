<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
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
            'nip' => 'required|numeric',
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'gender' => 'required',
            'hobby' => 'required',
            'photo' => 'mimes:png,jpg|max:1024'
        ];
    }

    public function messages()
    {
        return [
            'nip.required' => ':attribute required',
            'nip.numeric' => ':attribute must only number',
            'name.required' => ':attribute required',
            'name.regex' => ':attribute must only contain letters and whitespace',
            'email.required' => ':attribute required',
            'email.email' => ':attribute must contain a valid email address (with @ and .)',
            'gender.required' => ':attribute must select one',
            'hobby.required' => ':attribute must select one',
            'photo.mimes' => ':attribute must .PNG & .JPG',
            'photo.max' => ':attribute file size max 1mb'
        ];
    }
}
