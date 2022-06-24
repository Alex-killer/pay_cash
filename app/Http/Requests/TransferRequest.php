<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransferRequest extends FormRequest
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
            'mount' => 'required|numeric|min:1|max:900000',
            'wallet_id' => 'required',
            'userWallet_id' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'mount.required' => 'Это поле обязательно',
            'mount.numeric' => 'Вводить можно только число',
            'mount.min:1' => 'Нельзя вводить меньше 1',
            'mount.max:900000' => 'Нельзя переводить больше 900000',
            'wallet_id.required' => 'Это поле обязательно',
            'userWallet_id.required' => 'Это поле обязательно',
        ];
    }
}
