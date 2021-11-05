<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class crearContactoCreateRequest extends FormRequest
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
            'nombre' => ['required','regex:/^[\pL\s\-]+$/u','min:10'],
            'correo' => ['required','email:rfc,dns'],
            'telefono' => ['required','numeric','digits_between:8,12'],
            'mensaje' => ['required','min:15'],
        ];
    }
}
