<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'hora_salida_canada' => 'required',
			'hora_llegada_centro' => 'required',
			'hora_salida_centro' => 'required',
			'hora_llegada_canada' => 'required',
			'autobus_id' => 'required',
			'conductor_id' => 'required',
        ];
    }
}
