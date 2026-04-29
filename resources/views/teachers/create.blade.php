@extends('layout')
@section('content')

<div class="card">
    <div class="card-header text-center fs-5 fw-bold">Teachers Page</div>
    <div class="card-body">
        <a href="{{ url('teachers') }}" class="btn btn-sm rounded-pill" title="Add New teachers" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                      color: white; 
                                      border: none;
                                      box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
            <i class="fa fa-plus" aria-hidden="true"></i> 🔙 Back
        </a>

        <form action="{{ url('teachers') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>

@stop