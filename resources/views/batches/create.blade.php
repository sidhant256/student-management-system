@extends('layout')
@section('content')

<div class="card">
    <div class="card-header text-center fs-5 fw-bold">Batches</div>
    <div class="card-body">
        <a href="{{ url('batches') }}" class="btn btn-sm rounded-pill" title="Add New teachers" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                      color: white; 
                                      border: none;
                                      box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
            <i class="fa fa-plus" aria-hidden="true"></i> 🔙 Back
        </a>

        <form action="{{ url('batches') }}" method="post">
            {!! csrf_field() !!}

            <label>Batch Name</label><br>
            <input type="text" name="name" id="name" class="form-control mb-3"><br>

            <label>Course</label><br>
            <select name="course_id" id="course_id" class="form-control mb-3">
                <option value="">-- Select Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select><br>

            <label>Start Date</label><br>
            <input type="date" name="start_date" id="start_date" class="form-control mb-3"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>

    </div>
</div>

@stop