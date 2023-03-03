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
            'Post' => 'string|required|max:100|min:3',
            'Dept' => 'string|required|max:100|min:3',
            'Appodate' => 'date|required|max:100',
            'Status' => 'string|required|max:100',
            'Remarks' => 'string|required|max:100',
            
        ];
    }
}
