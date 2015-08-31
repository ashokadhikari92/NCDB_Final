<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddParentRequest;
use Repo\Repositories\Address\AddressInterface;
use Repo\Repositories\ParentsDetail\ParentsDetailInterface;

use Illuminate\Http\Request;

class ParentController extends Controller {

	private $location;

	private $parent;

	function __construct(AddressInterface $location, ParentsDetailInterface $parent)
	{
		$this->location = $location;

		$this->parent = $parent;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('birthRegistration.parents.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$district = $this->location->getLocationsByLocnType('District');

		return view('birthRegistration.parents.create')->with('districts',$district);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param AddParentRequest $request
	 * @return Response
	 */
	public function store(AddParentRequest $request)
	{
		$result = $this->parent->addParent($request->all());

		return redirect('parents')->with('message',$result['message']);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getDetails()
	{
		return $this->parent->getAllParents();
	}

}
