<?php

namespace App\Http\Requests\About;

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
            'name' => ['required', 'string', 'max:255'],
            'hobby' => ['required', 'string', 'max:255'],
            'interest' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'mission' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,svg', 'max:4092', 'dimensions:min_width=100,min_height=100']
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
            'name' => trans('form.translate.group'),
            'hobby' => trans('form.translate.key'),
            'interest' => trans('form.translate.id'),
            'description' => trans('form.translate.en'),
            'mission' => trans('form.translate.en'),
            'image' => trans('form.translate.en')
        ];
    }
}
