<?php

namespace App\Http\Requests\Backend\Articles\Galery;

use Illuminate\Foundation\Http\FormRequest;

class CreateGaleryRequest extends FormRequest
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
            'title' => ['required'],
            'type' => ['required'],
            'video_source' => ['required_if:type,video'],
            "video_source_upload" => ['required_if:video_source,upload'],
            "video_source_youtube" => ['required_if:video_source,youtube'],
            "featured_image" => ['required_if:type,picture']
        ];
    }
}
