@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Batches</div>
        <div class="card-body">
            <a href="{{ url('payments') }}" class="btn btn-sm rounded-pill" title="Back to Payments" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                          color: white; 
                                          border: none;
                                          box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
                <i class="fa fa-plus" aria-hidden="true"></i> ← Back
            </a>

            <div class="card-body">
                <h5 class="card-title">Enrollment No: {{ $payments->enrollment->enroll_no }}</h5>
                <p class="card-text">Paid Date: {{ $payments->paid_date }}</p>
                <p class="card-text">Amount: {{ $payments->amount }}</p>
            </div>
        </hr>
        </div>
    </div>
@endsection