<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('student.index')->with('students',$students);
    }


    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request)
    {
        // nécessite d'ajouter les champs de validation
        $input = $request->all();
        Student::Create($input);
        return redirect('student')->with('flash_message','étudiant est ajouté') ;
    }


    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show')->with('student',$student);
    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit')->with('student',$student);
    }


    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message','étudiant modifié');
    }


    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message','étudiant supprimé');
    }
}
