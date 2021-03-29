<?php

namespace App\Http\Requests\Backend\Slider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['sometimes'],
            'description' => ['sometimes'],
            'image_location' => ['required'],
            'overlay_level' => ['sometimes'],
            'active' => ['sometimes'],
            'linked' => ['sometimes'],
            'linked_location' => ['required_if:linked,1']
        ];
    }
}
