<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules() : array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birthdate' => 'required|date'
        ];
    }
}
