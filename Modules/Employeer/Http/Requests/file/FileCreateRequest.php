<?php

namespace Modules\Employeer\Http\Requests\file;

use Illuminate\Foundation\Http\FormRequest;

class FileCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            's3_key' => 'required',
            'path'=> 'required',
            'file_type'=> 'required',
            'file_size' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
