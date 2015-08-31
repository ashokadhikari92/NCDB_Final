<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateBirthDetailRequest extends Request {

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
            'brth_first_name' => 'required',
            'brth_last_name' => 'required',
            'brth_birth_date_bs' => 'required',
            'brth_gender' => 'required'
		];
	}

}
