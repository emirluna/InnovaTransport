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
        
  
    }


     public function show(Request $request){

  


     }
    

     public function create(){
        return view('/vehicles/create');
     }


    public function store(Request $request){
       
        
    }


    public function update(Request $request)
    {

        

        return view('/home');
    }
    
}