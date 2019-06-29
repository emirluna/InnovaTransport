<?php

namespace App\Http\Controllers;
use App\User;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OfficeController extends Controller
{

    
    public function __construct()
	{
		$this->middleware('auth');
	} 

    public function index(){
        return view('/office/index');
     }
    

     public function show(){
         
        $chofer = User::all();
        
        return view('/office/index')->with('chofer' ,$chofer);
     }
    

     public function create(){
        return view('/office/create');
     }


    public function store(Request $request){
       
        $date = new \DateTime();
        $user = User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            //'password' => bcryptHasher::make($data['password'],10),
            'status' => 1,
            'photo' => 'img/porfile/',
            'role' =>  $request['rol'],
            'enterprise_id' =>  $request['enterprise_id'],
        ]);  
       /* $user->address()->create([
            'street'=> "",
            'number'=> 0,
            'town'=>"",
            'city'=> "",
            'state'=> "",
            'country'=> "",
            'zip_code'=> 0
        ]);
*/


        $chofer = User::all();

        return view('/office/index')->with('chofer' ,$chofer);
    }
    


    public function update(Request $request)
    {

        

        return view('/home');
    }
    
}
