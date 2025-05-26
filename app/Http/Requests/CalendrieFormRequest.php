<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalendrieFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dateDebu' => ['required'],
            'dateFin' => ['required'],
            'timeDebu' => ['required'],
            'timeFin' => ['required'],
            'titre' => ['required'],
            'description' => ['required']
        ];
    }

    public function message()
    {
        return [
            'dateDebu.required' => 'Dade de levenement récquis.',
            'dateFin.required' => 'Dade de fin récquis.',
            'timeDebu.required' => 'Heure de début récquis.',
            'timeFin.required' => 'Heure de fin récquis.',
            'titre.required' => 'Titre récquis.',
            'description.required' => 'Description récquis.'
        ];
    }
}
