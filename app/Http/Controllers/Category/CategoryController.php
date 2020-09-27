<?php

namespace App\Http\Controllers\Category;

use App\Models\User;
use App\Models\Category;
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
               $categories=Category::latest()->paginate(env('PER_PAGE'));

               return response()->json($categories);
            }
            else {
                return abort(401);
            }
    }

    public function store(Request $request){
              if($this->verifed){
                  $duplicate=Category::where('name',$request->name)->get();
                  if($duplicate->count()>0)
                    return response()->json(['status'=>'This record already exsits'],422);
                    Category::create([
                        'name'=>$request->name,
                        'des'=>$request->des,
                        'thumbnail'=>single_image_upload($request,'images/category/'),
                    ]);
                    return response()->json(['status'=>'This record successfuly saved'],200);
              }
            else {
                return abort(401);
            }
    }


}
