<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Authorization can be adjusted based on roles.
    }

    public function rules()
    {
        return [
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'project_id' => 'nullable|exists:projects,id',
        ];
    }
}