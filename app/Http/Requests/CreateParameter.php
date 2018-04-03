<?php

namespace Vanguard\Http\Requests;

use Vanguard\Http\Requests\Request;

class CreateParameter extends Request
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
            'classification_id' => 'required',
            'tx_parameter' => 'required',
            'nb_min' => 'required',
            'nb_max' => 'required',
            'unit_id' => 'required',
        ];
    }
}
