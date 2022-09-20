<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home()
    {
        $data = [
            'name' => 'Ashna',
            'age' => 17
        ];
        return view('welcome')->with($data);
    }

    public function profile()
    {
        $data = [
            'username' => 'Ship ship'
        ];
        return view('profile');
    }

    public function create()
    {
        return view('create');
    }

    public function submit(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->dob = $request->dob;
        $img = image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/' . $filename);
        $student->image = $filename;

        $student->save();
        return redirect('/list');
    }
public function list(){
    $students= Student::get();
    return view('list')->with('students',$students);
}
public function edit($id){
        $student=Student::where('id',$id)->first();
        return view('update')->with('student',$student);
    }
    public function update(Request $request){
$student = Student::where('id',$request->id)->first();
        return view('update')->with('student',$student);
        $student->name = $request->name;
        $student->address=$request->address;
        $student->age = $request->age;
        $student->dob = $request->dob;
    }
    }
