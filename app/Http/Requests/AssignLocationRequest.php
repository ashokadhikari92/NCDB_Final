<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AssignLocationRequest extends Request {

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

			'office_zone' => 'required',
			'office_district' => 'required',
			'office_vdc' => 'required',
			'office_ward' => 'required'
		];
	}

}
