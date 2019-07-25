<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index1()
    {
        return view('view1');
    }

    public function index2(Request $request)
    {
        $so1 = $request->input('so1');
        $so2 = $request->input('so2');
        $so3 = $request->input('so3');
        $denta = pow($so2,2) - 4*$so1*$so2;
        $x;
        $x1;
        $x2;
        if($denta<0){
            $x = 'vo nghiem';
            return view('view2',[
                'x' => $x
            ]);
        }else if($denta === 0){
            $x1 = (-$so2) / (2*$so1);
            return view('view2',[
                'xtrung' => $x1,
                
            ]);
        }else{
            $x1 = (-$so2 + sqrt($denta)) / (2*$so1);
            $x2 = (-$so2 - sqrt($denta)) / (2*$so1);
            return view('view2',[
                'x1' => $x1,
                'x2' => $x2
            ]);
        }
        
        
    }
}
