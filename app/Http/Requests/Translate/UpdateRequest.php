<?php

namespace App\Http\Requests\Translate;

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
            'group' => ['required', 'string', 'max:255'],
            'key' => ['required', 'string', 'max:255', 'unique:language_lines,key,' . $id],
            'id' => ['required', 'string', 'max:255'],
            'en' => ['required', 'string', 'max:255']
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
            'group' => trans('form.translate.group'),
            'key' => trans('form.translate.key'),
            'id' => trans('form.translate.id'),
            'en' => trans('form.translate.en')
        ];
    }
}
