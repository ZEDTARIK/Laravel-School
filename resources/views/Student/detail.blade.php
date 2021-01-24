@extends('layout')
@section('content')

<div class="row my-3">
    <div class="col-md-8 mx-auto text-left">
        <a href="{{ route('student.index')}}" class="btn btn-warning">
            Return Back
        </a>
    </div>
</div>

    <div class="row my-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Student N° :{{ $student->student_number}}
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">
                        {{ $student->firstname}} {{ $student->lastname}} 
                    </h4>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">Student Images: 
                            <img src="{{ asset('storage/'.$student->img ?? null)}}" class="image-fluid" 
                                style="width: 90px;"
                                alt="{{$student->lastname}}">
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Student Number : 
                            <span class="badge badge-default"> {{ $student->student_number}}</span>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Age: 
                            <span class="badge badge-default"> {{ $student->age }}</span>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Class Id: 
                            <span class="badge badge-default"> {{ $student->class_id }}</span>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Status: 
                            <span class="badge badge-default"> {{ $student->status_id }}</span>
                        <li class="list-group-item d-flex justify-content-between align-items-center">School Year: 
                            <span class="badge badge-default"> {{ $student->school_years_id }}</span>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Parents:
                            <span class="badge badge-default">
                                {{ $student->parents }}
                            </span>
                            
                        </li>
                        
                      </ul>
                </div>
                <div class="card-footer text-right">
                    <form method="POST" action="{{ route('student.destroy', ['student' => $student->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash-o"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection