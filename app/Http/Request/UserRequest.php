<?php


namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('post')) {
            return [
                    'name' => 'required|min:2|max:30',
                    'email' => 'required|email|unique:users,email',      
                    // 'password' => 'required|min:6|max:12',
            ];
        } else {
            return [
                'name' => 'required|min:2|max:30',
                'email' => ['required','email','unique:users,email'. $this->id],
                // 'password' => 'required|min:6|max:12',
            ];
        }
    }
}
