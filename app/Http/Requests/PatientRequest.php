<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'PrenomPat' => 'required|string|max:255',
            'NomPat' => 'required|string|max:255',
            'Sexe' => 'required|string|max:255',
            'DateNaiss' => 'required|date',
            'LieuNaiss' => 'required|string|max:255',
            'Age' => 'required|integer',
            'Etat_civil' => 'required|string|max:255',
            'AddressePat' => 'required|string|max:255',
            'Mutuelle' => 'required|string|max:255',
            'Profession' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:patients,email',
            'Tel' => 'required|string|max:255',
            'Observations' => 'required|string|max:255',
        ];
        
    }
}
