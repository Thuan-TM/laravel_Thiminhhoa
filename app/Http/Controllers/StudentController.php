<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    //
    public function get_all_student(){
        $data = Student::all();
        return view('students.student_manage', ['data'=>$data]);
    }
    //
    public function get_student_by_id($id){
        $data = Student::find($id);
        return view('students.student_edit',['data'=>$data]);
    }
    //
    public function edit(Request $request,$id)
    {
        $data = Student::find($id);
        $data->fullname = $request->fullname;
        $data->address= $request->address;
        $data->birthday = $request->birthday;
        $data->save();

        return redirect('/student');
    }
    // 
    public function delete($id){
        $data = Student::find($id);
        $data->delete();
        return redirect('/student');
    }
    //
    public function create(){
        return view('students.student_add');
    }
    //
    public function add(Request $req){
        $data = Student::create([
        'fullname' =>  $req->fullname,
        'address'=> $req->address,
        'birthday' =>  $req->birthday,]);
        return redirect('/student');
    }
}
