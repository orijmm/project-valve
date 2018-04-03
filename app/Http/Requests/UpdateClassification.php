<?php

namespace Vanguard\Http\Requests;

use Vanguard\Http\Requests\Request;

class UpdateClassification extends Request
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
            'tx_name' => 'required',
            'tx_description' => 'required',
        ];
    }
}
