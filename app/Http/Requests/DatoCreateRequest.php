<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatoCreateRequest extends FormRequest
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
            'tzutujil' => ['required','regex:/^[\pL\'\"\s\-]+$/u'],
            'spanish' => ['required','regex:/^[\pL\s\-]+$/u'],
            'ingles' => ['required','regex:/^[\pL\s\-]+$/u'],
        ];
    }
}
