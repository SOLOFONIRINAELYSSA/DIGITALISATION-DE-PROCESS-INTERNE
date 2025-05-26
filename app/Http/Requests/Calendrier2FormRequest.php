<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Calendrier2FormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Titre' => ['required'],
            'Description' => ['required'],
            'DateDebu' => ['required'],
            'DateFin' => ['required'],
            'TimeDebu' => ['required'],
            'TimeFin' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'Titre.required' => 'Le titre est requis.',
            'Description.required' => 'La description est requise.',
            'DateDebu.required' => 'La date de début est requise.',
            'DateFin.required' => 'La date de fin est requise.',
            'TimeDebu.required' => 'L\'heure de début est requise.',
            'TimeFin.required' => 'L\'heure de fin est requise.'
        ];
    }
}
