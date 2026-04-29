<?php

namespace App\Http\Controllers;
use App\Models\Batch;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Carbon\Carbon;


class BatchController extends Controller
{
    public function index(): View 
    {
        $batches = Batch::all();
        return view ('batches.index')->with('batches', $batches);
    }

    public function create(): View
    {
        $courses = \App\Models\Course::all();
        return view('batches.create')->with('courses', $courses);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'       => 'required',
            'course_id'  => 'required',
            'start_date' => 'required|date',
        ]);

        Batch::create($request->all());
        return redirect('batches')->with('flash_message', 'Batch Added!');
    }

    public function show (string $id): View
    {
        $batches = Batch::find($id);
        return view ('batches.show')->with('batches', $batches);
    }

    public function edit(string $id): View
    {
        $batches = Batch::find($id);
        return view ('batches.edit')->with('batches', $batches);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name'       => 'required',
            'course_id'  => 'required',
            'start_date' => 'required|date',
        ]);

        $batch = Batch::find($id);
    $batch->update($request->all());
    return redirect('batches')->with('flash_message', 'Batch updated');
    }

    public function destroy(string $id): RedirectResponse
    {
        $batches = Batch::find($id);
        $batches->delete();
        return redirect('batches')->with('flash_message', 'Batch deleted');
    }
}