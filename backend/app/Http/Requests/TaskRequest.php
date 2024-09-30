<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:to-do,in-progress,done',
            'due_date' => 'nullable|date',
            'task_list_id' => 'required|exists:task_lists,id',
            'assigned_to' => 'nullable|exists:users,id',
        ];
    }
}