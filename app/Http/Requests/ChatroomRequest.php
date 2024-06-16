<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChatroomRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'chatroom.name' => 'required|string|max:50',
        ];
    }
}
