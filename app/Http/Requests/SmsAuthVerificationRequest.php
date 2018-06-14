<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmsAuthVerificationRequest extends FormRequest
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
            'phone'=>'required|max:11|min:11',
            'verificationCode'=>'required|max:4|min:4',
        ];
    }
}
