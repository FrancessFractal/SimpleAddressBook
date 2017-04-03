<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEntry extends FormRequest
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
            // let the user put anything in for the name, as long as it fits in the db
            // we'll require a name, but let the user have multiple contacts with the same name
            'name' => 'required|max:255',

            // validate email and phone number, making sure they're the right type and will fit in db
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|phone|max:255'
        ];
    }
}
