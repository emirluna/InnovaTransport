<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
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
        return view('/customers/index');
     }
    

     public function show(Request $request){
         
        $chofer = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Customer']])->take(10)->get();
        
        $count = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Customer']])->count();

        return view('/customers/index')->with(['chofer' => $chofer, 'count' => $count]);
     }

     public function getCustomer(Request $request){
        //$chofer = Driver::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Driver']])->take(10)->get();
                $chofer = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Customer']])->take(10)->get();
                
                $count = User::where([['enterprise_id', '=', $request['id']], ['role', '=', 'Customer']])->count();
        
                return view('/customers/index')->with(['chofer' => $chofer, 'count' => $count]);
             }
    

     public function create(){
        return view('/customers/create');
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

        $chofer = User::where([['enterprise_id', '=', $request['enterprise_id']], ['role', '=', 'Customer']])->take(10)->get();
                
        $count = User::where([['enterprise_id', '=', $request['enterprise_id']], ['role', '=', 'Customer']])->count();

        //return view('/customers/index')->with(['chofer' => $chofer, 'count' => $count]);
        //return back(2);
        //return route('customer.show');
        return Redirect('/clientes/'.$request['enterprise_id']);
    }


    public function update(Request $request)
    {

        return view('/home');
    }

    public function destroy($id)
    {
        $customer = User::where('_id', '=', $id)->firstOrFail();
        $customer->delete();
        
        return back();

    }
}
