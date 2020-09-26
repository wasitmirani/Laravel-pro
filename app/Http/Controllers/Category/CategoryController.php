<?php

namespace App\Http\Controllers\Category;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    private $verifed=false;
     public function __construct()
    {   $token=request('token');
        $check_user=User::where('api_token',$token)->first();

        if($check_user){
            $this->verifed=true;
        }


    }

    public function show(){
            if($this->verifed){
                dd("true");
            }
            else {
                  dd("unautheriezed");
            }
    }
}
