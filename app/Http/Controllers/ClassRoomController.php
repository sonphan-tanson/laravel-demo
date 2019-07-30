<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
class ClassRoomController extends Controller
{
    public function index(){
        $classes = ClassRoom::all();
        return view('classes', ['classes' => $classes]);
    }
    public function createForm(){
        return view('admin.add_class');
    }

    public function create(Request $request){
        $this->validate($request, [
            "name"=> 'required|string|min:8',
            "teacher_name" => 'required|string|min:5|max:32',
            "major"=> 'required|string',
            'max_student' => 'nullable|numeric'
        ]);
        $data = $request->except('_token');
        $classRoom = new ClassRoom();
        $classRoom->name = $data['name'];
        $classRoom->teacher_name = $data['teacher_name'];
        $classRoom->major = $data['major'];
        $classRoom->max_student = $data['max_student'];
        //luu
        $classRoom->save();
        // sau khi luu se tra ve danh sách
        return view('admin.class',['classes' => ClassRoom::all()]);
        // return $this->index
    }
}
