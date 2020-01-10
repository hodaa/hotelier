<?php

namespace App\Http\Requests;

use App\Enums\CategoryEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;





class HotelRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> Rule::notIn(["Free", "Offer", "Book", "Website"]),'required|min:10',
            'rating' =>'min:0|max:5',
            'category' => Rule::in(CategoryEnum::CATEGORIES),
            'zip_code' =>'required|integer|digits:5',
            'image' =>'mimes:jpeg,bmp,png',
            'reputation'=> 'required|integer|min:0|max:1000',
            'price' =>'required|integer',
            'availability' =>'required|integer',


        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($validator->fails()) {
            throw new HttpResponseException(validateErrors($validator->errors()->all()));
        }

    }
}
