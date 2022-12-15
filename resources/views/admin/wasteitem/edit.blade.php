@extends('layouts.admin')

@section('container-fluid')
<div class="card">
    <div class="card-hearder">
        <h3>Edit Waste Category
                <a href="{{ url('admin/wasteitem') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
        </h3>
    </div>
    <div class="card-body">
    <form action="{{ url('admin/wasteitem/'.$wasteitem->item_id) }}" method="POST"  >
    @csrf
    @method('PUT')
            <div class="row">
                <div class ="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" name="item_name" value="{{ $wasteitem->item_name }}" class="form-control" style="border:1px solid" />
                    @error ('item_name') <small class="text-danger">{{$message}}</small>@enderror
                </div>

                <div class ="col-md-6 mb-3">
                    <label for="">Points</label>
                    <input type="number" step="1" pattern="\d+" name="points" value="{{ $wasteitem->points }}" class="form-control" style="border:1px solid" />
                    @error ('points') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class ="col-md-12 ">
                    <button type="submit" class="btn btn-primary" style="width:100%" >Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection