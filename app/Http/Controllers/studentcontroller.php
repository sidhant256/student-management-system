<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;


class StudentController extends Controller
{
    public function index(): View
    { 
        $students = student::all();
        return view('students.index')->with('students', $students);

    }

    public function create(): View
    {
        return view('students.create');

    }

    public function store(Request $request): RedirectResponse 
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'student Addedd!');  

    }

    public function show(string $id): view
    {
        $students = student::find($id);
        return view('students.show')->with('students', $students);
    }

    public function edit(string $id): View
    {
        $students = student::find($id);
        return view('students.edit')->with('students', $students);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $students = student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('students')->with('flash_message', 'student Updated!');

    }

    public function destroy(string $id): RedirectResponse
    {
        $students = student::find($id);
        $students->delete();
        return redirect("students")->with('flash message', 'student deleted !');
    }

}
