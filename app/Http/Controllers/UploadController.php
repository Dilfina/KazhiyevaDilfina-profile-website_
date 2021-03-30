<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadFile;


class UploadController extends Controller
{
	 function index(Request $request) {
         $this->validate($request, [
         'name' => 'required',
         'surname' => 'required',
         'email'=>'required',
         'photos'=>'required'
         ]);
         /*if($request->hasFile('photos')){
         	$allowedfileExtension=['pdf','jpg','png','docx'];
         	$files=$request->file('photos');
         	foreach ($files as $file) {
         		$filename=$file->getClientOriginalName();
         		$extension=$file->getClientOriginalExtension();
         		$check=in_array($extension, $allowedfileExtension);
         		if($check){
         			$items=Item::create($request->all());
         			foreach ($request->photos as $photo) {
         				
         			}
         		}

         		
         	}
         }*/

   
           UploadFile::create([
             'name'=>$request->name,
             'surname'=>$request->surname,
             'email'=>$request->email
             ]);
             return $request->file('photos')->store('docs');
       }   

}
