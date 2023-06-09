<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TraitementRequest extends FormRequest
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
            'DateTraitement' => 'required|date',
            'Acte' => 'required|in:Traitement endodontique,Obturation composite,Détartrage,Surfaçage,Extraction,Extraction chirurgicale,Couronne ccm,Couronne zircone,Couronne ccc,Implant,Prothèse adjointe totale,Stellite,Prothèse adjointe partielle,Valplast,Inlaycore,Blanchiment,Orthodontie',
            'Dent' => 'required|integer|between:1,32',
            'NumDoss' => 'required|exists:patients,NumDoss',
        ];
    
    }
}
