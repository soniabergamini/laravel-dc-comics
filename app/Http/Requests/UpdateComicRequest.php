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
            'title' => 'required|min:3|max:100',
            'description' => 'nullable:max:1000',
            'thumb' => 'nullable|url|max:1000',
            'price' => 'required|max:20',
            'series' => 'required|max:50',
            'type' => 'required',
            'sale_date' => 'required|date',
            'artists' => 'required|exists:artists,id',
            'writers' => 'required|exists:writers,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Comic title is required. Please enter a valid comic title.',
            'description.required' => 'Comic description is required. Please enter a valid comic description.',
            'price.required' => 'Comic price is required. Please enter a valid comic price.',
            'series.required' => 'Comic series is required. Please enter a valid comic series.',
            'type.required' => 'Comic type is required. Please choose a valid comic type.',
            'sale_date.required' => 'Comic sale date is required. Please enter a valid comic sale date.',
            'artists.required' => 'Comic artists are required. Please select one or more artists for this comic.',
            'writers.required' => 'Comic writers are required. Please select one or more writers for this comic.',

            'title.min' => 'The comic title must contain at least :min characters.',
            'description.max' => 'The comic description must not exceed :max characters.',
            'title.max' => 'The comic title must not exceed :max characters.',
            'thumb.max' => 'The comic thumb url must not exceed :max characters.',
            'series.max' => 'The comic series must not exceed :max characters.',

            'thumb.url' => 'Please enter a valid comic thumb url.',

            'sale_date.date' => 'Please enter a valid comic sale date.',
        ];
    }
}
