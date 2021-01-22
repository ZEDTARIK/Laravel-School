<div class="form-group row">
    <label for="student_number" class="col-md-3 col-form-label text-md-right">Student Number</label>
    <div class="col-md-6">
        <input value="{{ old('student_number', $student->student_number ?? null) }}" id="student_number"  class="form-control" name="student_number" placeholder="Student Number">
    </div>
</div>

<div class="form-group row">
    <label for="firstname" class="col-md-3 col-form-label text-md-right">First Name</label>
    <div class="col-md-6">
        <input value="{{ old('firstname', $student->firstname ?? null) }}" id="firstname"  class="form-control" name="firstName" placeholder="First Name">
    </div>
</div>

<div class="form-group row">
    <label for="lastname" class="col-md-3 col-form-label text-md-right">Last Name</label>
    <div class="col-md-6">
        <input value="{{ old('lastname', $student->lastname ?? null) }}" id="lastname"  class="form-control" name="lastname" placeholder="Last Name">
    </div>
</div>

<div class="form-group row">
    <label for="age" class="col-md-3 col-form-label text-md-right">Age</label>
    <div class="col-md-6">
        <input value="{{ old('age', $student->age ?? null) }}" type="number" id="age"  class="form-control" name="age" placeholder="Age">
    </div>
</div>


<div class="form-group row">
    <label for="class_id" class="col-md-3 col-form-label text-md-right">Class Id</label>
    <div class="col-md-6">
        <input value="{{ old('class_id', $student->class_id ?? null) }}" type="number" id="class_id"  class="form-control" name="class_id" placeholder="Student class Id">
    </div>
</div>

<div class="form-group row">
    <label for="parents" class="col-md-3 col-form-label text-md-right">Parents</label>
    <div class="col-md-6">
        <input  value="{{ old('parents', $student->parents ?? null) }}" id="parents"  class="form-control" name="parents" placeholder="FullName Parents">
    </div>
</div>

<div class="form-group row">
    <label for="tel" class="col-md-3 col-form-label text-md-right">Telephone</label>
    <div class="col-md-6">
        <input  value="{{ old('tel', $student->tel ?? null) }}" id="tel"  class="form-control" name="tel" placeholder="Telephone">
    </div>
</div>

<div class="form-group row">
    <label for="student_typeid" class="col-md-3 col-form-label text-md-right">Student Type</label>
    <div class="col-md-6">
        <input  value="{{ old('student_typeid', $student->student_typeid ?? null) }}" id="student_typeid"  class="form-control" name="student_typeid" placeholder="Student Type Id">
    </div>
</div>

<div class="form-group row">
    <label for="registration_fee" class="col-md-3 col-form-label text-md-right">Registration Fee</label>
    <div class="col-md-6">
        <input  value="{{ old('registration_fee', $student->registration_fee ?? null) }}" id="registration_fee"  class="form-control" name="registration_fee" placeholder="Registration Fee">
    </div>
</div>

<div class="form-group row">
    <label for="studentImg" class="col-md-3 col-form-label text-md-right">Student Image</label>
    <div class="col-md-6">
        <input  value="{{ old('studentImg', $student->img ?? null) }}" id="studentImg"  class="form-control" name="studentImg" placeholder="Student Image">
    </div>
</div>

<div class="form-group row">
    <label for="status_id" class="col-md-3 col-form-label text-md-right">Status</label>
    <div class="col-md-6">
        <input value="{{ old('status_id', $student->status_id ?? null) }}" type="number"  id="status_id"  class="form-control" name="status_id" placeholder="Status Id">
    </div>
</div>

<div class="form-group row">
    <label for="school_years_id" class="col-md-3 col-form-label text-md-right">School Year</label>
    <div class="col-md-6">
        <input value="{{ old('school_years_id', $student->school_years_id ?? null) }}" type="number"  id="school_years_id"  class="form-control" name="school_years_id" placeholder="School Year">
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