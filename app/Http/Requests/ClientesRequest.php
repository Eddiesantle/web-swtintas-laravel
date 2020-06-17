<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            //
            'contact_name' => 'required|min:3|max:255',
            'contact_email' => 'required|min:3|max:255',
            'contact_tell' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'contact_name.required'          => 'Informe seu nome.',
            'contact_email.required'         => 'Informe seu e-mail.',
            'contact_tell.required'          => 'Informe seu telefone.',
        ];
    }

}
