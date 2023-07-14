<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:30',
            'description' => 'nullable:max:1000',
            'thumb' => 'nullable|url|max:1000',
            'price' => 'required|max:20',
            'series' => 'required|max:50',
            'type' => 'required',
            'sale_date' => 'required|date',
        ];
    }
}
