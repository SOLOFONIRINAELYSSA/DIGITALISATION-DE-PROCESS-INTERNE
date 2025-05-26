<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numEmp' => ['required'],
            'Nom' => ['required'],
            'Prenom' => ['required'],
            'Sexe' => ['required'],
            'Naissance' => ['required'],
            'Adresse' => ['required'],
            'Numero' => ['required'],
            'Email' => ['required'],
            'Poste' => ['required'],
            'DatEntre' => ['required'],
            // 'CodeEntreprise' => ['required'],
            'Postal' => ['required'],
            'Ville' => ['required']
        ];
    }

    public function message()
    {
        return [
            'numEmp.required' => 'CIN employe récquis.',
            'Nom.required' => 'Nom employe récquis.',
            'Prenom.required' => 'Prenom employe récquis.',
            'Sexe.required' => 'Sexe employe récquis.',
            'Naissance.required' => 'Naissance employe récquis.',
            'Adresse.required' => 'Adresse employe récquis.',
            'Numero.required' => 'Numero employe récquis.',
            'Email.required' => 'Email employe récquis.',
            'Poste.required' => 'Poste employe récquis.',
            'DatEntre.required' => 'DatEntre employe récquis.',
            // 'CodeEntreprise.required' => 'Code Entreprise récquis.',
            'Postal.required' => 'Postal employe récquis.',
            'Ville.required' => 'Ville employe récquis.'
        ];
    }
}
