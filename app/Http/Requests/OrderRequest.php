<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $saleType = ['required','in:customer,teacher,student'];

        $name = ['sometimes'];
        if($this->get('saleType')=='customer'){
            $saleId = ['nullable'];
            $name = ['required','string'];
        }else{
            $saleId = ['required','numeric'];
        }

        $others = [
            'mobile'=>['required','numeric'],
            'address'=>['required','string'],
            'date'=>['required','date'],
            'total'=>['required','numeric'],
            'discount'=>['required','numeric'],
            'due'=>['required','numeric'],
            'items'=>['required','array'],
            'items.*'=>['required','array'],
            'items.*.product'=>['required','numeric'],
            'items.*.quantity'=>['required','numeric'],
            'items.*.rate'=>['required','numeric'],
            'items.*.total'=>['required','numeric'],
        ];

        

        return array_merge(compact('saleType','saleId','name'),$others);
       

       
    }
}
