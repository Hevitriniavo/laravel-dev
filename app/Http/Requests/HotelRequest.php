<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return[
            'name' => 'required|string|min:10',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'postal_code' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'url' => 'nullable|mimes:jpeg,png,gif,pdf|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le champ du nom est requis.',
            'name.string' => 'Le champ du nom doit être une chaîne de caractères.',
            'name.min' => 'Le champ du nom doit avoir au moins :min caractères.',
            'address.required' => 'Le champ de l\'adresse est requis.',
            'address.string' => 'Le champ de l\'adresse doit être une chaîne de caractères.',
            'city.required' => 'Le champ de la ville est requis.',
            'city.string' => 'Le champ de la ville doit être une chaîne de caractères.',
            'state.required' => 'Le champ de l\'état est requis.',
            'state.string' => 'Le champ de l\'état doit être une chaîne de caractères.',
            'country.required' => 'Le champ du pays est requis.',
            'country.string' => 'Le champ du pays doit être une chaîne de caractères.',
            'postal_code.required' => 'Le champ du code postal est requis.',
            'postal_code.string' => 'Le champ du code postal doit être une chaîne de caractères.',
            'phone_number.required' => 'Le champ du numéro de téléphone est requis.',
            'phone_number.string' => 'Le champ du numéro de téléphone doit être une chaîne de caractères.',
            'email.required' => 'Le champ de l\'adresse e-mail est requis.',
            'email.email' => 'Le champ de l\'adresse e-mail doit être une adresse e-mail valide.',
            'url.mimes' => 'Le champ de l\'URL doit être un fichier de type :values.',
            'url.max' => 'Le champ de l\'URL ne doit pas dépasser :max kilo-octets.',
        ];
    }
}
