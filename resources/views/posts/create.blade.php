@extends('layouts.app')

@section('content')
<div class="container">

{{-- title --}}
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">title</label>
                    <input 
                        id="title" 
                        name="title" 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        value="" required autocomplete="title" autofocus>

                       

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>
        </div>

        {{-- description --}}

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                    <textarea
                        id="description" 
                        name="description" 
                        type="text" 
                        class="form-control @error('description') is-invalid @enderror" 
                        value="" required autocomplete="description" autofocus>
                    </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>
        </div>
   

            {{-- button --}}
            <div class="row pt-5">
                <div class="col-8 offset-2">
                    <div class="col-8 offset-2"></div> 
                        <button class="btn-primary"> Add New post</button>
                </div>
            </div>

    </form>
</div>
@endsection
