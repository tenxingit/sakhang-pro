<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
            'Appno' => 'integer|required|max:1000',
            'Appdate' => 'date|required|max:100',
            'Name' => 'string|required|max:100',
            'post_id' => 'string|required|max:100',
            'department_id' => 'string|required|max:100',
            'Appodate' => 'date|required|max:100',
            'status_id' => 'string|required|max:100',
            'Remarks' => 'string|required|max:100',
            
        ];
    }
}
