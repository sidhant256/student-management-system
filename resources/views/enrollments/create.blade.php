@extends('layout')
@section('content')


<div class="card">
    <div class="card-header text-center fs-5 fw-bold">Enrollment Page</div>
    <div class="card-body">
        <a href="{{ url('enrollments') }}" class="btn btn-sm rounded-pill" title="Add New teachers" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                      color: white; 
                                      border: none;
                                      box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
            <i class="fa fa-plus" aria-hidden="true"></i> 🔙 Back
        </a>

        <form action="{{ url('enrollments') }}" method="post">
            {!! csrf_field() !!}
            <label>Enroll_No:</label></br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>

            <label>Batch</label></br>
            <input type="text" name="batch_id" id="batch_id" class="form-control"></br>

            <label>Student</label></br>
            <input type="text" name="student_id" id="student_id" class="form-control"></br>

            <label>Join date</label>
            <input type="text" name="join_date" id="join_date" class="form-control"></br>

            <label>Fees</label>
            <input type="text" name="fee" id="fee" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>

@stop