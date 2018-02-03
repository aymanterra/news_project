<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRole extends FormRequest
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
            //
            'name' => 'required|string|max:190|unique:roles,name,' . $this->role->id,
            'slug' => 'required|string|max:190|unique:roles,slug,' . $this->role->id,
            'description' => 'nullable|string',
            'permisions.*' => 'numeric',
        ];
    }
}
