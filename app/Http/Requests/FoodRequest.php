<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'name' => 'required|max:255|min:3',
            'image' => 'required|max:255|min:3',
            'price' => 'required|numeric',
            'description' => 'required|min:5|max:255',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Inserisci un nome',
            'name.max' => 'La lunghezza massima consentita è di :max caratteri',
            'name.min' => 'La lunghezza minima consentita è di :min caratteri',
            'image.required' => 'Inserire una immagine',
            'image.max' => 'La lunghezza massima consentita è di :max caratteri',
            'image.min' => 'La lunghezza minima consentita è di :min caratteri',
            'price.required' => 'Inserisci il prezzo',
            'price.numeric' => 'Inserisci un valore numerico',
            'description.required' => 'Inserisci una descrizione',
            'description.max' => 'La lunghezza massima consentita è di :max caratteri',
            'description.min' => 'La lunghezza minima consentita è di :min caratteri',

        ];
    }
}