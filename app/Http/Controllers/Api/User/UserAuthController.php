<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Complexity\Exception;

class UserAuthController extends Controller
{
    //

    public function login(Request $request){
        Category::create([
    'name' => "test",
    'des' => "flutter",
    'slug' => "flutter"]);

     try {

        $email=$request->email;
        $password=$request->password;
        if(empty($email))
            return response()->json(['errors'=>['email'=>'Email is required']]);

    $credentials = request(['email','password']);
    if (!Auth::attempt($credentials)) {
         return abort(401);
    }
    $user = User::where('email', $request->email)->first();
    if ( ! Hash::check($request->password, $user->password, [])) {
       throw new \Exception("Error in Login");
    }
    $tokenResult = $user->createToken("authToken")->plainTextToken;
    return response()->json([
     "status_code" => 200,
     "access_token"=> $tokenResult,
     "token_type" =>"Bearer",
    ],200);
  } catch (Exception $error) {
        return response()->json([
        'status_code'=> 500,
        'message' =>'Error in Login',
            'error' => $error,
        ]);

    }


    }
}