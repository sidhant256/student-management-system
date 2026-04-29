<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class Coursecontroller extends Controller
{
    public function index(): View
    { 
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'course Addedd!');

    }

    public function show (string $id): view
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    public function edit (string $id): View
    {
        $courses = Course::find($id);
        return view("courses.edit")->with('courses', $courses);
    }

    public function update (Request $request, string $id): RedirectResponse
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message','course updated');
    }

    public function destroy (string $id): RedirectResponse
    {
        $courses = Course::find($id);
        $courses->delete();
        return redirect('courses')->with('flash_message', 'course deleted');
    }
}
