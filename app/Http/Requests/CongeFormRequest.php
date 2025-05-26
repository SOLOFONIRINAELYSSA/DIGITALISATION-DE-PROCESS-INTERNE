<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CongeFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numEmp' => ['required'],
            'nomApprobateur' => ['required'],
            'typeConge' => ['required'],
            'nbrjr' => ['required'],
            'solde' => ['nullable'],
            'jours_reportes' => ['nullable'],
            'motif' => ['nullable'],
            'dateDebut' => ['required'],
            'dateFin' => ['required']
        ];
    }

    public function message()
    {
        return [
          
        ];
    }
}
