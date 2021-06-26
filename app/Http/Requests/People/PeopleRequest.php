<?php

namespace App\Http\Requests\People;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
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
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'primer nombre',
            'last_name' => 'apellido',
            'email' => 'correo',
            'phone' => 'telefono'
        ];
    }
}
