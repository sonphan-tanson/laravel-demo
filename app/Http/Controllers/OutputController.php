<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutputController extends Controller
{
    public function index(Request $request)
    {
        var_dump('sd');
        // $so1 = $request->input('so1');
        // $so2 = $request->input('so2');
        // return view('view2',[
        //     'so1' => $so1,
        //     'so2' => $so2,
        // ]);
    }
}
