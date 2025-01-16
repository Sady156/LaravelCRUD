<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create(){
       return view('create'); 
    }


    public function ourfilestore(Request $request){


        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable' , 'mimes:jpg,bmp,png,webp',
        ]);


        $imageName=null;

        if(isset($request->image)){
            $imageName=time().'.'.$request ->image->extension();
            $request->image->move(public_path('image'),$imageName);

        }

 

        $post = new post;

        $post-> name= $request ->name;
        $post-> description= $request ->description;
        $post-> image=  $imageName;

        $post->save();


        return redirect()->route('home');
    }


        public function editData($id){
            $post= post::findorfail($id);

            return view('edit',['ourPost'=>$post]);


        }


        public function updateData($id,Request $request){
           


            $validated = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'image' => 'nullable' , 'mimes:jpg,bmp,png,webp',
            ]);
    
    

            // $imageName=null;
    

       
    
     
    
            $post = post::findorfail($id);
            $post-> name= $request ->name;
            $post-> description= $request ->description;
            // $post-> image=  $imageName;

            if(isset($request->image)){
                $imageName=time().'.'.$request ->image->extension();
                $request->image->move(public_path('image'),$imageName);
                $post-> image=  $imageName;
    
            }
    
            $post->save();
    
    
            return redirect()->route('home')->with('success',"Your post has been updated");


        }

        public function deleteData($id){

            $post = post::findorfail($id);

            $post->delete();
            

            return redirect()->route('home');
        }









    //
}
