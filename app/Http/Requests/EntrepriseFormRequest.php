<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntrepriseFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'CodeEntreprise' => ['required'],
            'NomEntreprise' => ['required'],
            'PosatalEntreprise' => ['required'],
            'VillEntreprise' => ['required'],
            'EmailEntreprise' => ['required']
        ];
    }

    public function message()
    {
        return [
            'CodeEntreprise.required' => 'Code Entreprise récquis.',
            'NomEntreprise.required' => 'Nom Entreprise récquis.',
            'PosatalEntreprise.required' => 'Posatal Entreprise récquis.',
            'VillEntreprise.required' => 'Ville Entreprise récquis.',
            'EmailEntreprise.required' => 'Email Entreprise récquis.'
        ];
    }
}
