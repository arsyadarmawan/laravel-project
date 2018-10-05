@extends('layouts.app')
{{-- @extends('layout.app') --}}


@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','', ['class' => 'form-control','placeholder' => 'Title of Dataset'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Description')}}
            {{Form::textarea('body','', ['id'=>'article-ckeditor','class' => 'form-control','placeholder' => 'Description of Dataset'])}}
        </div>

        <div class="form-group">
            {{-- <input type="file" accept=".csv" /> --}}
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
@endsection