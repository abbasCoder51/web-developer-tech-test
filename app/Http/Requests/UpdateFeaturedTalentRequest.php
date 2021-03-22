<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeaturedTalentRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'url_link' => 'required',
            'image' => 'required',
            'location' => 'required',
            'job_category' => 'required',
            'employment_type' => 'required',
            'skill' => 'required'
        ];
    }
}
