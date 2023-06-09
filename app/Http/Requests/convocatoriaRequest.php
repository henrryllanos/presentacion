<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class convocatoriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'asunto'=>'bail|required|string',
            'pdf'=>'bail|required|mimes:pdf'
        ];
    }
}
