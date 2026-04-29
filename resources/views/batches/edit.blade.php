@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <a href="{{ url('batches') }}" class="btn btn-sm rounded-pill" title="Add New teachers" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                      color: white; 
                                      border: none;
                                      box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
            <i class="fa fa-plus" aria-hidden="true"></i> ← Back
        </a>

        <form action="{{ url('batches/' . $batches->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$batches->id}}" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
            <label>Syllabus</label></br>
            <input type="text" name="course_id" id="course_id" value="{{$batches->course_id}}" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop