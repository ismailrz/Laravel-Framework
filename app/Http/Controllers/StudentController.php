<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->mobile = $request->mobile;

        $student->save();
        return redirect()->Route('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::All();

        return view('show')->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($student)
    {
        $student = Student::find($student);
        return view('edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student)
    {
        $student = Student::find($student);

        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->mobile = $request->mobile;

        $student->save();
        return redirect()->Route('show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete($student)
    {
        $student = Student::find($student);

        $student -> delete();
        return redirect()->Route('show');
    }
}
