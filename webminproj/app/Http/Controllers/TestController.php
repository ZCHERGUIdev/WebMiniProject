<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login($name){
        echo "you are logged sucessfully $name";
    }
}
