<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(){
        return view('/customers/index');
     }
    

     public function show(){
         
        $chofer = User::all();
        
        return view('/customers/index')->with('chofer' ,$chofer);
     }
    

     public function create(){
        return view('/customers/create');
     }


    public function store(Request $request){
       
        return User::create([
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
       
       
        return view('/home');
    }


    public function update(Request $request)
    {

        

        return view('/home');
    }
    
}
