<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\BirthDetail;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

use Illuminate\Http\Request;

class BirthRegistrationReportController extends Controller {

	private $child;

	private $address;

	function __construct(BirthDetail $child, Address $address)
	{
		$this->child = $child;

		$this->address = $address;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return view('reports.birth_registration.index');
		return view('reports.birth_registration.birth_main');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $reasons = Lava::DataTable();

        $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(array('Check Reviews', 5))
            ->addRow(array('Watch Trailers', 2))
            ->addRow(array('See Actors Other Work', 4))
            ->addRow(array('Settle Argument', 89));

        $piechart = Lava::PieChart('IMDB')
            ->setOptions(array(
                'datatable' => $reasons,
                'title' => 'Reasons I visit IMDB',
                'is3D' => true,
                'slices' => array(
                    Lava::Slice(array(
                        'offset' => 0.2
                    )),
                    Lava::Slice(array(
                        'offset' => 0.25
                    )),
                    Lava::Slice(array(
                        'offset' => 0.3
                    ))
                )
            ));

        return view('reports.birth_registration.pie_chart')->with('piechart',$piechart);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	public function birthMainReport(Request $request)
	{
		$input = $request->all();

		$vdc = null; $district = null; $zone = null;$from = 2015-01-01;$to = date('Y-m-d');

		if(isset($input['vdc']))$vdc = $input['vdc'];
		elseif(isset($input['district']))$district = $input['district'];
		elseif(isset($input['zone']))$zone = $input['zone'];

		$address = $this->addressForReport($vdc,$district,$zone);//dd($address);

		if(isset($input['from']) && ($input['from'] != null || $input['from'] != ''))$from = date('Y-m-d',strtotime($input['from']));
		if(isset($input['to']) && ($input['to'] != null || $input['to'] != ''))$to = date('Y-m-d',strtotime($input['to']));

		$result = array();

		foreach($address as $location)
		{
			$minMax = [$location->min,$location->max];
			$data = $this->child->whereBetween('brth_registered_date',[$from,$to])->whereBetween('brth_birth_address',[$location->min,$location->max])->get();

			$male = 0; $female = 0; $other = 0;
			foreach($data as $value)
			{
				if($value->brth_gender === "Male") {
					$male += 1;
				}
				elseif($value->brth_gender === "Female"){
					$female += 1;
				}
				else{
					$other += 1;
				}
			}
			$result[]= [
				'location' => $location->locn_name,
				'total' => $male+$female+$other,
				'male' => $male,
				'female' => $female,
				'other' => $other
			];
		}

		return $result;
	}

	public function addressForReport($vdc=null,$district=null,$zone=null)
	{
		$address = null;

		if($vdc != null)
		{
			$address = $this->address->where('locn_parent_id',$vdc)->get();

			foreach($address as $value)
			{
				$value->min = $value->locn_id;

				$value->max = $value->locn_id;
			}
		}
		elseif($district != null)
		{
			$address = $this->address->where('locn_parent_id',$district)->get();

			foreach($address as $value)
			{
				$value->min = 0; $value->max = 0;

				$vdc = $this->address->where('locn_parent_id',$value->locn_id)->get();

				foreach($vdc as $v)
				{
					$ward = $this->address->where('locn_parent_id',$v->locn_id)->get();

					$min = $ward->min('locn_id'); $max = $ward->max('locn_id');

					if($value->min>$min && $min != null)$value->min = $min;
					if($value->max<$max)$value->max = $max;
				}
			}
		}
		elseif($zone != null)
		{
			$address = $this->address->where('locn_parent_id',$zone)->get();

			foreach($address as $value)
			{
				$value->min = 0; $value->max = 0;

				$district = $this->address->where('locn_parent_id',$value->locn_id)->get();

				foreach($district as $d)
				{
					$vdc = $this->address->where('locn_parent_id',$d->locn_id)->get();

					foreach($vdc as $v)
					{
						$ward = $this->address->where('locn_parent_id',$v->locn_id)->get();

						$min = $ward->min('locn_id'); $max = $ward->max('locn_id');

						if($value->min>$min && $min != null)$value->min = $min;
						if($value->max<$max)$value->max = $max;
					}
				}
			}
		}
		else
		{
			$address = $this->address->where('locn_parent_id',0)->get();

			foreach($address as $value)
			{
				$value->min = 0; $value->max = 0;

				$zone = $this->address->where('locn_parent_id',$value->locn_id)->get();

				foreach($zone as $z)
				{
					$district = $this->address->where('locn_parent_id',$z->locn_id)->get();

					foreach($district as $d)
					{
						$vdc = $this->address->where('locn_parent_id',$d->locn_id)->get();

						foreach($vdc as $v)
						{
							$ward = $this->address->where('locn_parent_id',$v->locn_id)->get();

							$min = $ward->min('locn_id'); $max = $ward->max('locn_id');

							if($value->min>$min && $min != null)$value->min = $min;
							if($value->max<$max)$value->max = $max;
						}
					}
				}
			}
		}

		return $address;
	}

	public function getData()
	{
		$data = '{
	"name" : "report",
	"children" : [
		{
			"name" : "Mechi",
			"children" : [
				{
					"name" : "Illam",
					"children" : [
						{
							"name" : "Amchok",
							"children" : [
								 {"name": "Ward No 1", "size": 3938},
							     {"name": "Ward No 2", "size": 3812},
								 {"name": "Ward No 3", "size": 6714},
								 {"name": "Ward No 4", "size": 7743},
								 {"name": "Ward No 5", "size": 3938},
							     {"name": "Ward No 6", "size": 3812},
								 {"name": "Ward No 7", "size": 6714},
								 {"name": "Ward No 8", "size": 7743}
							]
						},
						{
							"name" : "Bajho",
							"children" : [
								{"name": "Ward No 1", "size": 3938},
							     {"name": "Ward No 2", "size": 3812},
								 {"name": "Ward No 3", "size": 6714},
								 {"name": "Ward No 4", "size": 7743},
								 {"name": "Ward No 5", "size": 3938},
							     {"name": "Ward No 6", "size": 3812},
								 {"name": "Ward No 7", "size": 6714},
								 {"name": "Ward No 8", "size": 7743}
							]
						},
						{
							"name" : "Barbote",
							"children" : [
								 {"name": "Ward No 1", "size": 3534},
								  {"name": "Ward No 2", "size": 5731},
								  {"name": "Ward No 3", "size": 7840},
								  {"name": "Ward No 4", "size": 5914},
								  {"name": "Ward No 5", "size": 3416}
							]
						},
						{
							"name" : "Chisapani",
							"children" : [
								{"name": "Ward No 1", "size": 3938},
							     {"name": "Ward No 2", "size": 3812},
								 {"name": "Ward No 3", "size": 6714},
								 {"name": "Ward No 4", "size": 7743}
							]
						}
					]
				},
				{
					"name" : "Jhapa",
					"children" : [
						{"name" : "Anarmani", "size" : 4456},
						{"name" : "Arjundhara", "size" : 8456},
						{"name" : "Bahundangi", "size" : 6456},
						{"name" : "Baigundhara", "size" : 456},
						{"name" : "Balubari", "size" : 5600},
						{"name" : "Baniyani", "size" : 4456}
					]
				},
				{
					"name" : "Pachthar",
					"children" : [
						{"name" : "Aangna", "size" : 4056},
						{"name" : "Aangsarang", "size" : 3456},
						{"name" : "Aarubote", "size" : 6056},
						{"name" : "Amarpur", "size" : 5456},
						{"name" : "Bharapa", "size" : 5600},
						{"name" : "Chilingdin", "size" : 4456}
					]
				},
				{
					"name" : "Taplejung",
					"children" : [
						{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
					]
				}
			]
		},
		{
			"name" : "Koshi",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Sagarmatha",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Janakpur",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Bagmati",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Narayani",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Gandaki",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Lumbini",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Dhaulagiri",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Rapti",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Karnali",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Bheri",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Seti",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		},
		{
			"name" : "Mahakali",
			"children" : [
				{"name" : "Ambegudin", "size" : 5056},
						{"name" : "Ankhop", "size" : 2456},
						{"name" : "Chaksibote", "size" : 7056},
						{"name" : "Change", "size" : 556},
						{"name" : "Dhungesaghu", "size" : 2600},
						{"name" : "Dokhu", "size" : 4536}
			]
		}
	]
}
';
		return ($data);
	}

	public function getDataPieChart()
	{
		$data = 'gender,population
				Male,4499890
				Female,3815998
				Other,1853788';
		return $data;
	}

	public function getPieChart()
	{
		return view('reports.birth_registration.pie_chart');
	}

}
