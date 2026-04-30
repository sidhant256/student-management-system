@extends('layout')
@section('content')

<div class="card">
    <div class="card-header text-center fs-5 fw-bold">Payments</div>
    <div class="card-body">
        <a href="{{ url('payments') }}" class="btn btn-sm rounded-pill" title="Add New teachers" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                                      color: white; 
                                      border: none;
                                      box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
            <i class="fa fa-plus" aria-hidden="true"></i> 🔙 Back
        </a>

        <form action="{{ url('payments') }}" method="post">
            {!! csrf_field() !!}

            <label>Enrollment No</label><br>

            <select name="enrollment_id" id="enrollment_id" class="form-control mb-3">
                @foreach($enrollments as $id => $enrollno)
                    <option value="{{ $id }}">{{ $enrollno }}</option>
                @endforeach
            </select>

            <label>Paid Date</label><br>
            <input type="date" name="paid_date" id="paid_date" class="form-control mb-3"><br>

            <label>Amount</label><br>
            <input type="text" name="amount" id="amount" class="form-control mb-3"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>

    </div>
</div>

@stop