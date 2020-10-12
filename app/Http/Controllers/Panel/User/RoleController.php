<?php

namespace App\Http\Controllers\Panel\User;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
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

    public function all(){
           if($this->verifed){
        $roles=Role::orderBy('name','ASC')->paginate(env('PER_PAGE'));

        return response()->json($roles);
            }
           else {
                return abort(401);
            }
    }

    public function store(Request $request){
         if($this->verifed){
        $this->validate($request,[

            'name'=>'required'
        ]);
  $duplicate=Role::where('name',$request->name)->get();
                  if($duplicate->count()>0)
                    return response()->json(['status'=>'This record already exsits'],422);
        Role::create([
            'name'=>$request->name
        ]);

           return response()->json();
            }
           else {
                return abort(401);
            }
}

public function update(Request $request){
    if($this->verifed){
   $this->validate($request,[
       'name'=>'required'
   ]);
$duplicate=Role::where('name',$request->name)->get();
             if($duplicate->count()>0)
               return response()->json(['status'=>'This record already exsits'],422);
   Role::where('id',$request->id)->update([
       'name'=>$request->name
   ]);

      return response()->json();
       }
      else {
           return abort(401);
       }
   }

   public function delete(Request $request){
       if($this->verifed){
       $role=Role::where('id',$request->id)->delete();
       return response()->json();
   }
  else {
       return abort(401);
   }
   }

    }

