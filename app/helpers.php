<?php

use Illuminate\Support\Facades\File;

     function single_image_upload($request,$path,$slug){
        global $filename;
        $img_slug=str_replace(' ', '-', $slug);

         if ($request->hasFile('thumbnail')) {
              $filename =$img_slug."-". time().'.'.$request->thumbnail->extension();

              $request->thumbnail->move(public_path($path), $filename);
        }
        return  $filename;
    }
    function single_file_delete($path,$filename){

        File::delete($path.'/'.$filename);
    }


?>
