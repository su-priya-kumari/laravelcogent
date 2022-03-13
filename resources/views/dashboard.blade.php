@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                
                <div class="card-header">
                    <div class="pull-left">
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('noteAll') }}">View All Notes</a>
                    </div>
                </div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    You are Logged In
                    <hr>
                    <h4>Hello, {{Auth::user()->name}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection