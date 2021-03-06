<?php

namespace App\Http\Controllers\Panel\Category;

use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    //
    private $verifed=false;
     public function __construct()
    {
         $token=request('token');
             if(!empty($token) )
             {
                    $check_user=User::where('api_token',$token)->first();
                     if($check_user){
                        $this->verifed=true;
                    }

             }
             else {
                 return abort(401);
             }




    }


    public function getcategories(){
            if($this->verifed){
               $categories=Category::latest()->get();

               return response()->json($categories);
            }
            else {
                return abort(401);
            }
    }
    public function show(){
            if($this->verifed){
               $categories=SubCategory::latest()->paginate(env('PER_PAGE'));

               return response()->json($categories);
            }
            else {
                return abort(401);
            }
    }
}