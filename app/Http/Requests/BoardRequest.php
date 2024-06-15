<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'board.title' => 'required|string|max:50',
            'board.body' => 'required|string|max:4000',
        ];
    }
}
