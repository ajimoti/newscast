@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog Settings</div>

                <div class="card-body">
                   
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ? old('name') : $blog->name }}">

                        @if ($errors->has('name'))
                            <div class="help-block">
                                {{ $errors->first('name') }}
                            </div>
                        @endif

                    </div>

                </div>

                <div class="card-body">
                   
                    <div class="form-group{{ $errors->has('slug') ? ' has-error' : ''}}">
                        <label for="slug">slug</label>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"> {{config('app.url') . 'blog/'}} </span>
                            </div>
                            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') ? old('slug') : $blog->slug }}">
                        </div>

                        @if ($errors->has('slug'))
                            <div class="help-block">
                                {{ $errors->first('slug') }}
                            </div>
                        @endif

                    </div>

                </div>

                <div class="card-body">
                   
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : ''}}">
                        <label for="description">description</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old('description') ? old('description') : $blog->description }}">

                        @if ($errors->has('description'))
                            <div class="help-block">
                                {{ $errors->first('description') }}
                            </div>
                        @endif

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
