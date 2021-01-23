<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::cursor();
        return view('Student.index', ['Students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->student_number = $request->input('student_number');
        $student->firstName = $request->input('firstName');
        $student->lastname = $request->input('lastname');
        $student->age = $request->input('age');
        $student->class_id = $request->input('class_id');
        $student->parents = $request->input('parents');
        $student->tel = $request->input('tel');
        $student->student_typeid = $request->input('student_typeid');
        $student->registration_fee = $request->input('registration_fee');
        $student->img = $request->input('studentImg');
        $student->status_id = $request->input('status_id');
        $student->school_years_id = $request->input('school_years_id');
        $student->validate_date = $request->input('validate_date');
        $student->registration_date = $request->input('registration_date');

        // Save to DataBase
        $student->save();
        $request->session()->flash('status', 'Student SuccessFully Inserted');
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('Student.detail', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('Student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->student_number = $request->input('student_number');
        $student->firstName = $request->input('firstName');
        $student->lastname = $request->input('lastname');
        $student->age = $request->input('age');
        $student->class_id = $request->input('class_id');
        $student->parents = $request->input('parents');
        $student->tel = $request->input('tel');
        $student->student_typeid = $request->input('student_typeid');
        $student->registration_fee = $request->input('registration_fee');
        $student->img = $request->input('studentImg');
        $student->status_id = $request->input('status_id');
        $student->school_years_id = $request->input('school_years_id');
        $student->validate_date = $request->input('validate_date');
        $student->registration_date = $request->input('registration_date');
        
        // Save to DataBase
        $student->save();
        $request->session()->flash('status', 'Student SuccessFully Updated');
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $student = Student::findOrFail($id);
        $student->destroy($id);
        $request->session()->flash('status', 'Student Was Deleted SuccessFully !');
        return redirect()->route('student.index');
    }
}
