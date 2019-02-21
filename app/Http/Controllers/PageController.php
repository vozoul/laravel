<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function viewHome(){
        return view('welcome');
    }

    public function viewCatalogue(){
        return view('catalogue');
    }

    public function viewProduct($id){
        //
        return view('product');
    }

    public function viewContact(){
        return view('contact');
    }

    public function viewBasket(){
        return view('basket');
    }
}
