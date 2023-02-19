<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UserStatusRequest extends FormRequest
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
            'status' => 'nullable',
            'user_id' => 'nullable' ,
            'from' => 'required' ,
            'to' => 'nullable'
        ];
    }
  /*  protected function prepareForValidation()
    {
        $this->merge([
            'from' => Carbon::parse($this->from)->startOfDay(),
            'to' => Carbon::parse($this->to)->endOfDay()
        ]);
    }*/
}
