<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DriversController extends Controller
{
    public function index(){
        return view('/drivers/index');
     }
    

     public function show(){
         
        $chofer = User::all();
        
        return view('/drivers/index')->with('chofer' ,$chofer);
     }
    

     public function create(){
        return view('/drivers/create');
     }


    public function store(Request $request){
     
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            //'password' => bcryptHasher::make($data['password'],10),
            'status' => 1,
            'photo' => 'img/porfile/',
            'role' =>  $data['rol'],
            'address' => array([
                'street'=> "",
                'number'=> 0,
                'town'=>"",
                'city'=> "",
                'state'=> "",
                'country'=> "",
                'zip_code'=> 0
            ]),
            'enterprise_id' =>  $data['enterprise_id'],
        ]);  
       
       
        return view('/home');
    }


    public function update(Request $request)
    {

        

        return view('/home');
    }
    


}
