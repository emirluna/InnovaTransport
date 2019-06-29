<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use Illuminate\Support\Facades\Hash;
use App\Address;
use App\Driver_Info;
use App\Bank_Info;
use App\User;
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
         
        $chofer = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->take(10)->get();
        
        $count = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->count();

        return view('/drivers/index')->with(['chofer' => $chofer, 'count' => $count]);
     }
    
     public function getDriver(Request $request){
//$chofer = Driver::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->take(10)->get();
   //     $chofer = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->take(10)->get();
   $chofer = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->take(10)->get();
                
   $count = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->count();

   return view('/drivers/index')->with(['chofer' => $chofer, 'count' => $count]);
     }

     public function create(){
        return view('/drivers/create');
     }


    public function store(Request $request){
     
       $driver = Driver::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            //'password' => bcryptHasher::make($data['password'],10),
            'status' => 1,
            'photo' => 'img/porfile/',
            'role' =>  $request['rol'],
            'resource' => $request['resource'],
            'enterprise_id' =>  $request['enterprise_id']
        ]);  
       
        $driver->driverinfo() -> create([
            'turn' => $request['turn'],
            'license_number' => $request['license_number'],
            'license_type' => $request['license_type'],
            'expiration_date' => $request['expiration_date'],
        ]);

        $driver -> banks() -> create([
            'bank' => $request['bank'],
            'number_account' => $request['number_account'],
            'clabe' => $request['clabe'],
            'currency' => $request['currency'],
        ]);

        $chofer = Driver::where([['enterprise_id', '=', $request['enterprise_id']], ['role', '=', 'Driver']])->take(10)->get();
        
        $count = Driver::where([['enterprise_id', '=', $request['enterprise_id']], ['role', '=', 'Driver']])->count();

        return view('/drivers/index')->with(['chofer' => $chofer, 'count' => $count]);
    }


    public function update(Request $request){

        

        return view('/home');
    }
    


}
