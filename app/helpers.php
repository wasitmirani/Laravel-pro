<?php


     function single_image_upload($request,$path){
        global $filename;

         if ($request->hasFile('thumbnail')) {
              $filename = time().'.'.$request->thumbnail->extension();

              $request->thumbnail->move(public_path($path), $filename);
        }
        return  $filename;
    }


?>
