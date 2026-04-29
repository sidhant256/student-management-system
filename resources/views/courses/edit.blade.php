@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <a href="{{ url('courses') }}" class="btn btn-sm rounded-pill" title="Add New teachers" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                      color: white; 
                                      border: none;
                                      box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
            <i class="fa fa-plus" aria-hidden="true"></i> ← Back
        </a>

        <form action="{{ url('courses/' . $courses->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$courses->id}}" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"></br>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop