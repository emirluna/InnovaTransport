<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
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
        $enter = Enterprise::find($request->get('id_company'));
            
            $enter-> company_name = $request->get('name');
            $enter-> rfc = $request->get('rfc');
            $enter-> social_reason = $request->get('sr');
            $enter-> phone = $request->get('phone');
            $enter-> emial = $request->get('email');
            $enter-> status = $request->get('status');
            $enter-> address = array(
                'country' => $request->get('country'), 
                'state' => $request->get('state'),
                'city' => $request->get('city'),
                'town' =>  $request->get('town'),
                'street' =>  $request->get('street'),
                'number' =>  $request->get('number'),
                'zipcode' =>  $request->get('zipcode')
            );
            $enter-> suscription = array(
                'type_suscription' => 0,
                'units_hired' => 10,
                'units_active' => 10, 
                'units_available' => 10,
                'units_assigned' => 0,
                'status' => 1
            );
            $enter-> purchases = array(
                'type_package' => 'free',
                'number_units' => 10,
                'unit_price' => 0,
                'total_price' => 0,
                'action' => 1,
                'purchase_date' => $date->format('d-m-Y H:i:s'),
 	            'activation_date' => $date->format('d-m-Y H:i:s'),
 	            'expiration_date' => $date->format('d-m-Y H:i:s'),
 	            'status_service' => 1,
 	            'status_payment' => 1
            );
        
            $enter->save();
        
       
       
       
       
       
        return view('/home');
    }


    public function update(Request $request)
    {

        

        return view('/home');
    }
    
}
