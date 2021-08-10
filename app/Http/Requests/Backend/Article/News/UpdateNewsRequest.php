<?php

namespace App\Http\Requests\Backend\Article\News;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
        if (session('locale') == 'id') {
            return [
                'title-id' => ['required'],
                'intro-id' => ['required', 'max:300'],
                'value-id' => ['required'],
                // 'featured_image' => ['required']
            ];
        }elseif(session('locale') == 'en'){
            return [
                'title-en' => ['required'],
                'intro-en' => ['required', 'max:300'],
                'value-en' => ['required'],
                // 'featured_image' => ['required']
            ];
        }
        return [
            'title-id' => ['required'],
            'intro-id' => ['required', 'max:300'],
            'value-id' => ['required'],
            'featured_image' => ['required']
        ];
    }
}
