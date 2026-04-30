@extends('layout')
@section('content')

    <div class="card mt-4">
        <div class="card-header">
            <h2>Enrollment Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/enrollments/create') }}" class="btn btn-sm" title="Add New Batch" style="background: linear-gradient(135deg, #4776e6 0%, #0f3460 100%); 
                      color: white; 
                      border: none;
                      box-shadow: 0 2px 8px rgba(71, 118, 230, 0.4);">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New Enrollment
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enroll_no:</th>
                            <th>Batch_id</th>
                            <th>Student_id</th>
                            <th>Join_date</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enrollments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enroll_no }}</td>
                            <td>{{ $item->batch->name }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->join_date }}</td>
                            <td>{{ $item->fee }}</td>
                            <td>
                                <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollments"><button class="btn btn-info btn-sm"><i class="fa fa-eye aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollments"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Cuurses" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection 