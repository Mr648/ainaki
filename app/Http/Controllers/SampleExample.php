<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleExample extends Controller
{
    //

    public function test($id){
        return view('sampleexample', compact('id'));
    }
}
