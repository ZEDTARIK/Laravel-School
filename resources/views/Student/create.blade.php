@extends('layout');
@section('content')

<div class="row my-3">
    <div class="col-md-10 mx-auto text-left">
        <a href="{{ route('student.index')}}" class="btn btn-warning">
            Return Back
        </a>
    </div>
</div>

<div class="row my-2">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">Add New Student</div>
            <div class="card-body">
                
                <form method="POST" action="{{ route('student.store') }}" 
                enctype="multipart/form-data">
                    @csrf
                    @include('student.form')
                    
                    <div class="form-group">
                        <div class="col-sm-6 mx-auto">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
        
            </form>

            </div>
        </div>
    </div>
</div>

@endsection