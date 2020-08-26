<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   
  public function AddCategory(){
    return view("category.create");
  }

   public function WritePost(){
     return view("event.create");
   }
  
}
