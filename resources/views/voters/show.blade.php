@extends('layouts.app')
  
@section('title', 'Show Voter Details')
  
@section('contents')
       <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $Voters->first_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $Voters->last_name }}" readonly>
        </div>
    </div>
     <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $Voters->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mobile</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $Voters->mobile }}" readonly>
        </div>
    </div>

     <div class="row">
        <div class="col mb-3">
            <label class="form-label">dob</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $Voters->dob }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">address</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $Voters->address }}" readonly>
        </div>
    </div>

     <div class="row">
        <div class="col mb-3">
            <label class="form-label">taluk</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $Voters->taluk }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">district</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $Voters->district_name }}" readonly>
        </div>
    </div>

       <div class="row">
        <div class="col mb-3">
            <label class="form-label">state</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $Voters->state_name }}" readonly>
        </div>
        <div class="col mb-3">
             <label class="form-label">Gender</label>
        <select name="gender" class="form-control" id="gender" readonly>
                <option value="">Select Gender</option>
                <option value="1" {{ $Voters->gender == 1 ? 'selected' : '' }}>Male</option>
                <option value="2" {{ $Voters->gender == 2 ? 'selected' : '' }}>Female</option>
                <option value="3" {{ $Voters->gender == 3 ? 'selected' : '' }}>Other</option>
            </select>
        </div>

     </div>

@endsection