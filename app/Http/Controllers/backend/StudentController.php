<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    

  public function index() {
        $students = Student::all();
        return view('backend.studentINFO.index', compact('students'));
    }

    public function create() {
        return view('backend.studentINFO.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email|max:255'
        ]);
        
        Student::create($validated);
        return redirect()->route('studentINFO.index');
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('backend.studentINFO.edit', compact('student'));
    }

    public function update(Request $request, $id) {
        $student = Student::find($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email,' . $id
        ]);
        
        $student->update($validated);
        return redirect()->route('studentINFO.index');
    }

    public function destroy($id) {
        Student::destroy($id);
        return redirect()->route('studentINFO.index');
    }
}
