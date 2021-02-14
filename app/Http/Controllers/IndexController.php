<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
    
        return view('index.index', [
            'title' => 'Best Selling Books'
            
        ]);
    }
}
