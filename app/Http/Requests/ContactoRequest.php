<?php

namespace salaBolivar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    protected $redirect = "/#contacto";
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
            'nombre'=>'required|min:5|max:50',
            'email'=>'required|string|email|max:255',
            'mensaje'=>'required|string|max:255',
        ];
    }
}