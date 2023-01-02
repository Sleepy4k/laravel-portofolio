<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        $id = basename(request()->path());

        return [
            'title' => ['required', 'string', 'max:255', 'unique:projects,title,' . $id],
            'description' => ['required', 'string'],
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
            'title' => trans('form.project.title'),
            'description' => trans('form.project.description'),
            'image' => trans('form.project.image')
        ];
    }
}
