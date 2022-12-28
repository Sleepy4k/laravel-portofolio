<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'app_name' => ['required', 'string', 'max:255'],
            'app_icon' => ['nullable', 'image', 'mimes:jpg,jpeg,png,svg', 'max:4092', 'dimensions:min_width=100,min_height=100'],
            'meta_author' => ['required', 'string', 'max:255'],
            'meta_keywords' => ['required', 'string', 'max:255'],
            'meta_description' => ['required', 'string']
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'app_name' => trans('form.application.app_name'),
            'app_icon' => trans('form.application.app_icon'),
            'meta_author' => trans('form.application.meta_author'),
            'meta_keywords' => trans('form.application.meta_keywords'),
            'meta_description' => trans('form.application.meta_description')
        ];
    }
}
