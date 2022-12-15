@extends('layouts.admin')

@section('container-fluid')
<div class="card">
    <div class="card-hearder">
        <h3>Add Reward
                <a href="{{ url('admin/reward/create') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
        </h3>
    </div>
    <div class="card-body">

    <form action="{{ url('admin/reward') }}" method="POST" enctype="multipart/form-data" >
    @csrf
            <div class="row">
                <div class ="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" name="reward_name" class="form-control" style="border:1px solid" />
                    @error ('reward_name') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class ="col-md-6 mb-3">
                    <label for="">Points</label>
                    <input type="number" tep="1" pattern="\d+" name="points" class="form-control" style="border:1px solid"/>
                    @error ('points') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class ="col-md-6 mb-3">
                    <label for="">Image</label>
                    <input type="file" name="reward_image" class="form-control" style="border:1px solid"/>
                </div>

                <div class ="col-md-12 ">
                    <button type="submit" class="btn btn-primary" style="width:100%" >Save</button>
                </div>
            </div>
        </form>
</div>
</div>
@endsection