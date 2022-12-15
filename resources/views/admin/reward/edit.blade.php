@extends('layouts.admin')

@section('container-fluid')
<div class="card">
    <div class="card-hearder">
        <h3>Edit Reward
                <a href="{{ url('admin/reward/create') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
        </h3>
    </div>
    <div class="card-body">

    <form action="{{ url('admin/reward/'.$reward->reward_id) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
            <div class="row">
                <div class ="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" name="reward_name" value="{{ $reward->reward_name }}" class="form-control" style="border:1px solid" />
                    @error ('reward_name') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class ="col-md-6 mb-3">
                    <label for="">Points</label>
                    <input type="number" tep="1" pattern="\d+" name="points" value="{{ $reward->points}}" class="form-control" style="border:1px solid"/>
                    @error ('points') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class ="col-md-6 mb-3">
                    <label for="">Image</label>
                    <img src="{{ asset('/assets/uploads/rewards/'.$reward->reward_image) }}" width="60px" height="60px" alt="">
                    <input type="file" name="reward_image" value="{{ $reward->reward_image }}" class="form-control" style="border:1px solid"/>
                </div>

                <div class ="col-md-12 ">
                    <button type="submit" class="btn btn-primary" style="width:100%" >Update</button>
                </div>
            </div>
        </form>
</div>
</div>
@endsection