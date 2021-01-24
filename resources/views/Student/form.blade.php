<div class="form-group row">
    <label for="student_number" class="col-md-3 col-form-label text-md-right">Student Number</label>
    <div class="col-md-6">
        <input 
            id="student_number"  
            class="form-control @error('student_number') is-invalid @enderror"
            value="{{ old('student_number', $student->student_number ?? null) }}"
            name="student_number" 
            placeholder="Student Number">
    </div>
    <div class="col-md-3">
        @if ($errors->has('student_number'))
            <span class="text-danger">{{ $errors->first('student_number') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="school_years_id" class="col-md-3 col-form-label text-md-right">School Year</label>
    <div class="col-md-6">
        <input 
            value="{{ old('school_years_id', $student->school_years_id ?? null) }}" 
            type="number"  
            id="school_years_id"  
            class="form-control @error('school_years_id') is-invalid @enderror"
            name="school_years_id"
             placeholder="School Year 2021">
    </div>
    <div class="col-md-3">
        @if ($errors->has('school_years_id'))
            <span class="text-danger">{{ $errors->first('school_years_id') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="firstname" class="col-md-3 col-form-label text-md-right">First Name</label>
    <div class="col-md-6">
        <input 
        value="{{ old('firstname', $student->firstname ?? null) }}" 
        id="firstname"  
        class="form-control @error('firstname') is-invalid @enderror"
        name="firstname" 
        placeholder="First Name">
    </div>
    <div class="col-md-3">
        @if ($errors->has('firstName'))
            <span class="text-danger">{{ $errors->first('firstName') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="lastname" class="col-md-3 col-form-label text-md-right">Last Name</label>
    <div class="col-md-6">
        <input 
        class="form-control @error('lastname') is-invalid @enderror"
        value="{{ old('lastname', $student->lastname ?? null) }}" 
        id="lastname"  class="form-control" 
        name="lastname" 
        placeholder="Last Name">
    </div>
    <div class="col-md-3">
        @if ($errors->has('lastname'))
            <span class="text-danger">{{ $errors->first('lastname') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="age" class="col-md-3 col-form-label text-md-right">Age</label>
    <div class="col-md-6">
        <input 
            value="{{ old('age', $student->age ?? null) }}" 
            type="number" 
            id="age"  
            class="form-control @error('age') is-invalid @enderror"
            name="age" 
            placeholder="Age">
    </div>
    <div class="col-md-3">
        @if ($errors->has('age'))
            <span class="text-danger">{{ $errors->first('age') }}</span>
        @endif
    </div>
</div>


<div class="form-group row">
    <label for="class_id" class="col-md-3 col-form-label text-md-right">Class Id</label>
    <div class="col-md-6">
        <input 
            value="{{ old('class_id', $student->class_id ?? null) }}" 
            type="number" 
            id="class_id"  
            class="form-control @error('class_id') is-invalid @enderror"
            name="class_id" 
            placeholder="Student class Id">
    </div>
    <div class="col-md-3">
        @if ($errors->has('class_id'))
            <span class="text-danger">{{ $errors->first('class_id') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="parents" class="col-md-3 col-form-label text-md-right">Parents</label>
    <div class="col-md-6">
        <input  
            value="{{ old('parents', $student->parents ?? null) }}" 
            id="parents"  
            class="form-control @error('parents') is-invalid @enderror"
            name="parents" 
            placeholder="FullName Parents">
    </div>
    <div class="col-md-3">
        @if ($errors->has('parents'))
            <span class="text-danger">{{ $errors->first('parents') }}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="tel" class="col-md-3 col-form-label text-md-right">Telephone</label>
    <div class="col-md-6">
        <input  value="{{ old('tel', $student->tel ?? null) }}" id="tel"  class="form-control" name="tel" placeholder="Telephone">
    </div>
</div>

<div class="form-group row">
    <label for="registration_fee" class="col-md-3 col-form-label text-md-right">Registration Fee</label>
    <div class="col-md-6">
        <input  value="{{ old('registration_fee', $student->registration_fee ?? null) }}" id="registration_fee"  class="form-control" name="registration_fee" placeholder="Registration Fee">
    </div>
</div>

<div class="form-group row">
    <label for="student_typeid" class="col-md-3 col-form-label text-md-right">Student Type</label>
    <div class="col-md-6">
        <input  value="{{ old('student_typeid', $student->student_typeid ?? null) }}" id="student_typeid"  class="form-control" name="student_typeid" placeholder="Student Type Id">
    </div>
</div>

<div class="form-group row">
    <label for="status_id" class="col-md-3 col-form-label text-md-right">Status</label>
    <div class="col-md-6">
        <input value="{{ old('status_id', $student->status_id ?? null) }}" type="number"  id="status_id"  class="form-control" name="status_id" placeholder="Status Id">
    </div>
</div>

<div class="form-group row">
    <label for="validate_date" class="col-md-3 col-form-label text-md-right">Validate Date</label>
    <div class="col-md-6">
        <input value="{{ old('validate_date', $student->validate_date ?? null) }}" type="date"  id="validate_date"  class="form-control" name="validate_date" placeholder="Validate Date">
    </div>
</div>

<div class="form-group row">
    <label for="registration_date" class="col-md-3 col-form-label text-md-right">Registration Date</label>
    <div class="col-md-6">
        <input value="{{ old('registration_date', $student->registration_date ?? null) }}" type="date"  id="registration_date"  class="form-control" name="registration_date" placeholder="Registration Date">
    </div>
</div>

<div class="form-group row">
    <label for="img" class="col-md-3 col-form-label text-md-right">Student Image</label>
    <div class="col-md-6">
        <input 
            type="file" 
            value="{{ old('img', $student->img ?? null) }}" 
            id="img"  
            class="form-control-file" 
            name="img" 
            placeholder="Student Image">
    </div>
</div>