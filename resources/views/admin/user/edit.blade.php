@extends('layouts.admin')

@section('container-fluid')
<div class="card">
    <div class="card-hearder">
        <h3>Edit User
                <a href="{{ url('admin/user') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
        </h3>
    </div>
    <div class="card-body">
    <form action="{{ url('admin/user'.$user->student_id) }}" method="POST"  >
    @csrf
    @method('PUT')

            <div class="row">
                <div class ="col-md-4 mb-3">
                    <label for=""> Last Name</label>
                    <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" style="border:1px solid" />
                    @error ('last_name') <small class="text-danger">{{$message}}</small>@enderror
                </div>

                <div class ="col-md-4 mb-3">
                    <label for=""> First Name</label>
                    <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" style="border:1px solid" />
                    @error ('first_name') <small class="text-danger">{{$message}}</small>@enderror
                </div>

                <div class ="col-md-4 mb-3">
                    <label for="">Student ID</label>
                    <input type="number" step="1" pattern="\d+" name="student_id" value="{{ $user->student_id }}" class="form-control" style="border:1px solid" />
                    @error ('student_id') <small class="text-danger">{{$message}}</small>@enderror
                </div>

                <div class ="col-md-12 mb-3">
                    <label for="">Email</label>
                    <input type="text"  name="email" value="{{ $user->email }}" class="form-control" style="border:1px solid" />
                    @error ('email') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class ="col-md-6 mb-3">
                    <label for="">Faculty</label>
                    <input type="text"  name="faculty" value="{{ $user->faculty }}" class="form-control" style="border:1px solid" />
                    @error ('faculty') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class ="col-md-6 mb-3">
                    <label for="">Year</label>
                    <input type="number"  name="year" step="1" pattern="\d+" value="{{ $user->year }}" class="form-control" style="border:1px solid" />
                    @error ('year') <small class="text-danger">{{$message}}</small>@enderror
                </div>

                <div class ="col-md-6 mb-3">
                    <label for="">Password</label>
                    <input type="password"  name="password" value="{{ $user->password}}" class="form-control" style="border:1px solid" />
                    @error ('password') <small class="text-danger">{{$message}}</small>@enderror
                </div>

                <div class ="col-md-4 mb-3">
                    <label for="">Confirm Password</label>
                    <input type="password"  name="confirm_assword" value="{{ $user->password }}" class="form-control" style="border:1px solid" />
                    @error ('confirm_password') <small class="text-danger">{{$message}}</small>@enderror
                </div>

                <div class ="col-md-12 ">
                    <button type="submit" class="btn btn-primary" style="width:100%" >Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection