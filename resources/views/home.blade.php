@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ auth()->user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="d-flex justify-content-end">

                    <a href="/posts/create">Add New Post</a>
                </div>
                </div>
            </div>
        </div>   
        
    </div>
 
</div>
@endsection
