<?php

namespace App\Http\Controllers;
use App\Enterprise;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function __construct()
	{
		$this->middleware('auth');
	} 


    public function index(){

        return view('/vehicles/index');
     }
    


    public function newVehicle(Request $request){
        
        $enter = Enterprise::where('_id', '=', $request['id'])->first();
        
        $v = $enter->vehicles()->create([
            'vin' => '112233',
            'model' => '2018',
            'brand' => 'ford',
            'color' => 'red'
        ]);

        if($v){
        echo "Todo ok";
        }
    }


     public function show(Request $request){

        $enter = Enterprise::where('_id', '=', $request['id'])->firstOrFail();
        
        $v = $enter->vehicles()->create([
            'vin' => '112233',
            'model' => '2018',
            'brand' => 'ford',
            'color' => 'red'
        ]);

        echo "Todo ok";


        /*$vehicles = Enterprise::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Customer']])->take(10)->get();

        return view('/vehicles/index')->with('chofer' ,$chofer);

        $chofer = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Customer']])->take(10)->get();
        
        $count = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Customer']])->count();

        return view('/customers/index')->with(['chofer' => $chofer, 'count' => $count]);*/
     }
    

     public function create(){
        return view('/vehicles/create');
     }


    public function store(Request $request){
       
        User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            //'password' => bcryptHasher::make($data['password'],10),
            'status' => 1,
            'photo' => 'img/porfile/',
            'role' =>  $request['rol'],
            'address' => array([
                'street'=> "",
                'number'=> 0,
                'town'=>"",
                'city'=> "",
                'state'=> "",
                'country'=> "",
                'zip_code'=> 0
            ]),
            'enterprise_id' =>  $request['enterprise_id'],
        ]);  
       
        $chofer = User::all();

        return view('/vehicles/index')->with('chofer' ,$chofer);
    }


    public function update(Request $request)
    {

        

        return view('/home');
    }
    
}