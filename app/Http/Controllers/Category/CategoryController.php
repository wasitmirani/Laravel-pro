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
                    Category::create([
                        'name'=>$request->name,
                        'des'=>$request->des,
                        'thumbnail'=>$this->single_image_upload($request,'images/category/'),
                    ]);
              }
            else {
                return abort(401);
            }
    }

    public function single_image_upload($request,$path){
        global $filename;

         if ($request->hasFile('thumbnail')) {
              $filename = time().'.'.$request->thumbnail->extension();

              $request->thumbnail->move(public_path($path), $filename);
        }
        return  $filename;
    }
}
