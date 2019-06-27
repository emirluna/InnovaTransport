<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use Illuminate\Support\Facades\Hash;


class DriversController extends Controller
{

    public function __construct()
	{
		$this->middleware('auth');
	} 

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6', 
            'last_name' => 'required|string|max:255',
            'phone' => 'required|numeric',
        ]);
    }

    public function index(){
        return view('/drivers/index');
     }
    

     public function show(){
         
        $chofer = Driver::all();
        
        return view('/drivers/index')->with('chofer' ,$chofer);
     }
    
     public function getDriver(Request $request){
//$chofer = Driver::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->take(10)->get();
        $chofer = Driver::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->take(10)->get();
        
        $count = Driver::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->count();

        return view('/drivers/index')->with(['chofer' => $chofer, 'count' => $count]);
     }

     public function create(){
        return view('/drivers/create');
     }


    public function store(Request $request){
     
       Driver::create([
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
            'driver_info' => array([
                'turn' => $request['turn'],
                'license_number' => $request['license_number'],
                'license_type' => $request['license_type'],
                'expiration_date' => $request['expiration_date'],
            ]),
            'bank_info' => array([
                'bank' => $request['bank'],
                'number_account' => $request['number_account'],
                'clabe' => $request['clabe'],
                'currency' => $request['currency'],
            ]),
            'resource' => $request['resource'],
            'enterprise_id' =>  $request['enterprise_id']
        ]);  
       
        $chofer = Driver::where([['enterprise_id', '=', $request['enterprise_id']], ['role', '=', 'Driver']])->take(10)->get();
        
        $count = Driver::where([['enterprise_id', '=', $request['enterprise_id']], ['role', '=', 'Driver']])->count();

        return view('/drivers/index')->with(['chofer' => $chofer, 'count' => $count]);
    }


    public function update(Request $request){

        

        return view('/home');
    }
    


}
