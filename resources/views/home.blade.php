@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Dashboard') }}</div>
                
                <div class="card-body ">
                <div class="row">
                    <div class="col-md-6">
                    <a href="https://demo.roboflow.com/recyclable-trash-detection/2?publishable_key=rf_x0fmutrEiZPZryliZNiglCI3OLM2" class="btn btn-success">
                        SCAN 
                    
                    </a>
</div>
                    <div class="col-md-6">
                    <a href="" class="btn btn-success">
                        REDEEM 
</a>
                    
</div>
</div>
</div>
             <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
