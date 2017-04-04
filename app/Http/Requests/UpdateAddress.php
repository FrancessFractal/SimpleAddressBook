<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddress extends FormRequest
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

            /**
             * I'm not going to go crazy on the validation here...
             *
             * It might make sense to restrict the fields to actual country names or codes, and well formated postal
             * codes and stuff like that, but that would require a lot of configuration, so I'm skipping it for the
             * scope of this project.
             *
             * If I were to add something like that, I would add new validation rules in AppServiceProvider, like I did
             * for the phone rule used on the UpdateEntry validation.
             *
             * I'm simply going to make sure everything fits in the database, and that certain fields are required
             *
             */
            'line1' => 'required|string|max:255',
            'line2' => 'nullable|string|max:255',
            'town' => 'required|string|max:255',
            'county' => 'nullable|string|max:255',
            'postal' => 'required|string|max:10',
            'country' => 'nullable|string|max:255',

        ];
    }
}
