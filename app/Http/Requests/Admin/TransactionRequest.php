<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

<<<<<<< HEAD
class GalleryRequest extends FormRequest
=======
class TransactionRequest extends FormRequest
>>>>>>> a29f9aa3779219e363600612a78fcc351ed7b861
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            'travel_packages_id' => 'required|string|in:IN_CART,PENDING,SUCCESS,CANCEL,FAILED'
=======
            'transaction_status' => 'required|string|in:IN_CART,PENDING,SUCCESS,CANCEL,FAILED'
>>>>>>> a29f9aa3779219e363600612a78fcc351ed7b861
        ];
    }
}
