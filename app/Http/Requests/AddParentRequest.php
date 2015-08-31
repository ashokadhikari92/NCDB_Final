<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddParentRequest extends Request {

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
			'prnt_first_name' => 'required',
			'prnt_last_name' => 'required',
			'prnt_occupation' => 'required',
			'prnt_citizenship_issued_district' => 'required',
			'prnt_citizenship_no' => 'required'
		];
	}

}
