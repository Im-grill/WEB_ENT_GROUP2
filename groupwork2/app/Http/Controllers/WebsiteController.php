<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // View list student
    public function index()
    {
        $students = Student::all();
        return view ('index', compact('students'));
    }

    // Add

    public function add_view()
    {
        return view('add_student');
    }

    public function add_submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();

        return redirect()->route('homepage');
    }
}
