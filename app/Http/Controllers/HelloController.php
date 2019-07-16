<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
        $name = 'son';
        $age = 20;
        $diachi = 'xom 5 tan son kim bang ha nam';
        return view('hello',[
            'name' => $name,
            'age' => $age,
            'diachi' => $diachi
        ]);
    }
}
