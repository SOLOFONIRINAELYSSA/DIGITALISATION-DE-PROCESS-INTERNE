<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenererQrFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numEmp' => ['required'],
            'imageqr' => ['required']
        ];
    }

    public function message()
    {
        return [
            'numEmp.required' => 'CIN employe récquis.',
            'imageqr.required' => 'Code QR récquis.'
        ];
    }
}
