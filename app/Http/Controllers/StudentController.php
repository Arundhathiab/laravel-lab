<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    // Display registration form
    public function create()
    {
        return view('students.create');
    }

    // Save student details
    public function store(Request $request)
    {
        $validated = $request->validate([
'roll_no' => 'required|string|max:20',
'name' => 'required|string|max:255',
'email' => 'required|email',
'department' => 'required|string',
'semester' => 'required|integer|min:1',
'cgpa' => 'nullable|numeric|min:0|max:10',
]);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('status', 'Student added successfully!');
    }

    // Display individual student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}