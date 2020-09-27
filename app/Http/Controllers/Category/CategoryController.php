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

    public function update(Request $request){
         if($this->verifed){
                  $duplicate=Category::where('name',$request->name)->get();
                  $category=Category::where('id',$request->id)->first();
   $slug=str_replace(' ', '-', $request->name);
                        global $file_name;
                            if($request->thumbnail=="" || $request->thumbnail==null){
                                $file_name= $category->thumbnail;
                            }
                            else {
                                single_file_delete("images/category/",$category->thumbnail);

                                $file_name= single_image_upload($request,'images/category/',$request->name);
                                if($duplicate->count()==1)
                                {
                                        Category::where('id',$request->id)->update(['thumbnail'=>$file_name,  ]);
                                     return response()->json(['status'=>'This record successfuly saved'],200);
                                    }
                            }
                  if($duplicate->count()>0)
                    return response()->json(['status'=>'This record already exsits'],422);


                    Category::where('id',$request->id)->update([
                        'name'=>$request->name,
                        'des'=>$request->des,
                        'slug'=>$slug,
                        'thumbnail'=>$file_name,
                    ]);
                    return response()->json(['status'=>'This record successfuly saved'],200);
              }
            else {
                return abort(401);
            }
    }
    public function store(Request $request){
              if($this->verifed){
                   $slug=str_replace(' ', '-', $request->name);
                  $duplicate=Category::where('name',$request->name)->get();
                  if($duplicate->count()>0)
                    return response()->json(['status'=>'This record already exsits'],422);
                    Category::create([
                        'name'=>$request->name,
                        'des'=>$request->des,
                        'slug'=> $slug,
                        'thumbnail'=>single_image_upload($request,'images/category/',$request->name),
                    ]);
                    return response()->json(['status'=>'This record successfuly saved'],200);
              }
            else {
                return abort(401);
            }
    }

    public function delete(Request $request){
        if($this->verifed){
                $category=Category::where('id',$request->id)->first();

              single_file_delete("images/category/",$category->thumbnail);
            $category->delete();
             return response()->json(['status'=>'This record successfuly delete'],200);
        }else {
                return abort(401);
            }
    }

    public function filter(){
        if($this->verifed){
            $query=request('query');
        $data==Category::where('name', 'like', '%' . Input::get('name') . '%')->get();;
         }else {
                return abort(401);
         }
    }


}
