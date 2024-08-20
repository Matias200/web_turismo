<?php

namespace App\Http\Requests;

use App\Models\citas;
use Illuminate\Foundation\Http\FormRequest;

class UpdatecitasRequest extends FormRequest
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
        $rules = citas::$rules;
        
        return $rules;
    }
}
