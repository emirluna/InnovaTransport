<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Vehicle;
use App\Enterprise;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->enterprise()->first()->_id;
        $customer = User::where([['enterprise_id', '=', $id],['role', '=', 'Customer']])->count();
        $driver = User::where('role', '=', 'Driver')->count();
        $office = User::where('role', '=', 'Office')->count();
        $vehicle  = auth()->user()->enterprise()->first()->vehicles()->get()->count();
        $order = auth()->user()->enterprise()->first()->orders()->get()->count();
        $journey = auth()->user()->enterprise()->first()->journeys()->get()->count();
        
        

        return view('home')->with(['user'=>$office, 'driver'=>$driver, 
        'customer'=>$customer, 'id'=>$id, 'vehicle'=>$vehicle, 
        'order' => $order, 'journey'=> $journey]);
    }
}
