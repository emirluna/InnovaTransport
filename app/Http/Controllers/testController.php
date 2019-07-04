<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Enterprise;
use App\Address;
use App\Vehicle;
use App\Driver;

class testController extends Controller
{
    
    public function newUser($id){
        
        
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        $user =  User::create([
            'name' => $randomString,
            'last_name' => $randomString,
            'email' => $randomString.'@gmai.com',
            'password' => Hash::make(123456),
            'phone' => 1111112,            
            'status' => 1,
            'photo' => 'img/porfile/',
            'role' => 'Office',
            'enterprise_id' => $id,
            ]);   
            
        $user->address()->create([
                'street'=> "25",
                'number'=> 0,
                'town'=>"Atoyatenco",
                'city'=> "Nativitas",
                'state'=> "Tlaxacala",
                'country'=> "México",
                'zip_code'=> 90718
            ]);
            
            return back();
    }


    public function newCustomer($id){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
            
            $user =  User::create([
                'name' => $randomString,
                'last_name' => $randomString,
                'email' => $randomString.'@gmai.com',
                'password' => Hash::make(123456),
                'phone' => 1111112,            
                'status' => 1,
                'photo' => 'img/porfile/',
                'role' => 'Customer',
                'enterprise_id' => $id,
                ]);   
                
            $user->address()->create([
                    'street'=> "25",
                    'number'=> 0,
                    'town'=>"Atoyatenco",
                    'city'=> "Nativitas",
                    'state'=> "Tlaxacala",
                    'country'=> "México",
                    'zip_code'=> 90718
                ]);
                
                return back();
    }



    public function newDriver($id){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
            
            $driver =  Driver::create([
                'name' => $randomString,
                'last_name' => $randomString,
                'email' => $randomString.'@gmai.com',
                'password' => Hash::make(123456),
                'phone' => 1111112,            
                'status' => 1,
                'photo' => 'img/porfile/',
                'role' => 'Driver',
                'resource' => 5000,
                'enterprise_id' => $id,
                ]);   
               
                $driver->driverinfo() -> create([
                    'turn' => 'Matutino',
                    'license_number' => 1727327282,
                    'license_type' => 'B',
                    'expiration_date' => '24-06-2020',
                ]);
        
                $driver -> banks() -> create([
                    'bank' => "Santander",
                    'number_account' => "3993939393333",
                    'clabe' => "8383838383",
                    'currency' => "MXN"
                ]);


            $driver->address()->create([
                    'street'=> "25",
                    'number'=> 0,
                    'town'=>"Atoyatenco",
                    'city'=> "Nativitas",
                    'state'=> "Tlaxacala",
                    'country'=> "México",
                    'zip_code'=> 90718
                ]);
                
         return back();
    }




    public function newVehicle($id){


        $empresa = Enterprise::find($id);
        $vehiculo =  $empresa -> vehicles()->create([ 
            'vin' => 'dcscd2q231q',
            'brand' => 'Ford', 
            'model' => 'dkfj44', 
            'color' => 'red'
        ]);

        
        //$vehiculo = $empresa->vehiculos()->first()->_id;

        //var_dump($vehiculo);

        $vehiculo->gps()->create([ 
            'serial_number' => 'djdjdj3322',
            'brand' => 'Sony', 
            'model' => 'jnddj', 
            'ip_address' => '192.168.1.1', 
            'last_latitude' => 0.1223213131, 
            'last_altitude' => 1.1223213131, 
            'status' => 1
        ]);
        
        return back();
            //return view('home');
    }


    public function newOrder($id){


        $empresa = Enterprise::find($id);
        $order =  $empresa -> orders()->create([ 
            'type_order' => 'Granel',
            'weight' => 3500,
            'volume' => 150,
            'description' => 'Producto variado para construcción',
            'frigile' => false,
            'date_assignation' => '25-02-2019',
            'date_order' => '25-02-2019',
            'date_delivery' => '25-02-2019',
            'evidence'=> '/evidence/photo/order',
            'status'=> 1
        ]);

    return back();

    }


    public function newJourney($id){

        $empresa = Enterprise::find($id);
        $journey =  $empresa -> journeys()->create([ 
            'type_charge'=> 'Granel',
            'type_transport'=> 'Truck',
            'date_creation'=> '25-02-2019',
            'date_assignation'=> '25-02-2019',
            'satus'=>1            
        ]);

        $journey-> orders()->create([ 
            'type_order' => 'Granel',
            'weight' => 3500,
            'volume' => 150,
            'description' => 'Producto variado para construcción',
            'frigile' => false,
            'date_assignation' => '25-02-2019',
            'date_order' => '25-02-2019',
            'date_delivery' => '25-02-2019',
            'evidence'=> '/evidence/photo/order',
            'status'=> 1
        ]);



        $ruta = $journey -> routes()->create([
            'distance'=>5500,
            'time'=>4.5,
            'money'=>7800
        ]);

        $ruta -> departure_address()->create([
            'street'=> "25",
                'number'=> 0,
                'town'=>"Atoyatenco",
                'city'=> "Nativitas",
                'state'=> "Tlaxacala",
                'country'=> "México",
                'zip_code'=> 90718
        ]);
      
        $ruta -> arrival_address()->create([
            'street'=> "25",
                'number'=> 0,
                'town'=>"Atoyatenco",
                'city'=> "Nativitas",
                'state'=> "Tlaxacala",
                'country'=> "México",
                'zip_code'=> 90718
        ]);
        
        $ruta -> order_address()->create([
            'street'=> "25",
                'number'=> 0,
                'town'=>"Atoyatenco",
                'city'=> "Nativitas",
                'state'=> "Tlaxacala",
                'country'=> "México",
                'zip_code'=> 90718
        ]);

        

    return back();

    }


}
