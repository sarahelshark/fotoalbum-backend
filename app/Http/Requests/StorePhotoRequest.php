<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> ' required|string|max:100',
            'category_id'=>'nullable|exists:categories,id',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1000',
            'description' =>'nullable|string|max:1000'
        ];
    }
}
