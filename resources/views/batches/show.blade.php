@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Batches</div>
        <div class="card-body">
            <a href="{{ url('batches') }}" class="btn btn-sm rounded-pill" title="Add New teachers" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                          color: white; 
                                          border: none;
                                          box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
                <i class="fa fa-plus" aria-hidden="true"></i> ← Back
            </a>

            <div class="card-body">
                <h5 class="card-title">Name: {{ $batches->name }}</h5>
                <p class="card-text">Course ID: {{ $batches->course_id }}</p>
                <p class="card-text">Start Date: {{ $batches->start_date }}</p>
            </div>
        </hr>
        </div>
    </div>
@endsection