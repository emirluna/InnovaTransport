<?php

namespace App\Http\Controllers;

use App\User;
use App\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use JWTAuth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;

class AppController extends Controller
{

    public function applogin(Request $request){

        $credentials = $request->json()->all();
        
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Correo o contraseña incorrecta'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'No se ha podido crear el token de seguridad'], 500);
        }
        
        
        $a=$request->json('email');
        
        $b = User::where("email", $a)->first();

        $response = array();
        $response["success"] = false;

        if ($b != null) {
            $response["success"] = true;
            $response["nombre"] = $b->name;
            $response["email"] = $b->email;
            $response["rol"] = $b->role;
            }

        /*

        $user = DB::table('users')->where('email', 'John')->first();

         
        User::find()
		
*/            
        echo json_encode($response);

        //return response()->json( compact('token', 'b') );
    }

    
    



}

