@extends('layout');
@section('content')

<div class="row my-3">
    <div class="col-md-12">
        <a href="{{ route('student.create')}}" class="btn btn-info">
            AddNew Student
        </a>
    </div>
  </div>

    <div class="row my-2">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr style="color:blue;">
                        <th># Student Number</th>
                        <th>Full Name</th>
                        <th>School Year</th>
                        <th>Class Id</th>
                        <th>Validation Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Students as $student)
                        <tr>
                            <td scope="row"> {{ $student->student_number}}</td>
                            <td>{{ $student->firstname}} {{ $student->lastname}}</td>
                            <td>{{ $student->school_years_id }}</td>
                            <td>{{ $student->class_id }}</td>
                            <td>{{ $student->validate_date }}</td>
                            <td>
                                <a href="{{'/student/'.$student->id.'/edit'}} " class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection