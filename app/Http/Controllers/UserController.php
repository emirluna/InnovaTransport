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

class UserController extends Controller
{   

    public function register(Request $request)
    {
        $validator = Validator::make($request->json()->all() , [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6', 
            'last_name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'enterprise_name' => 'required|string',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
        }

        $enter = Enterprise::create([
            'company_name' =>$request->json()->get('enterprise_name'),
            'status' => 0,
        ]);
        /*$enterprise = new Enterprise();
        $enterprise->company_name = $request->json()->get('enterprise_name');
        $enterprise->save();
        */

        $user = User::create([
            'name' => $request->json()->get('name'),
            'email' => $request->json()->get('email'),
            'password' => Hash::make($request->json()->get('password')),
            'status' => 1,
            'photo' => 'img/porfile/',
            'role' => 'admin',
            'enterprise_id' => $enter->_id,
        ]);
        
        

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user', 'token'),201);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->json()->all();
        
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Correo o contraseña incorrecta'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'No se ha podido crear el token de seguridad'], 500);
        }

        return response()->json( compact('token') );
    }

    public function getAuthenticatedUser()
    {
      
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['Usuario no encontrado'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['Token ha expirado'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['Token invalido'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['Token ausente'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }


    


}
