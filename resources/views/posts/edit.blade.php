{{-- @extends('layout.app') --}}
@extends('layouts.app')


@section('content')
    <h1>Edit Post</h1>
    {{-- 
        $post->id
        untuk mendapatkan id yang akan dipilih
        --}}
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Judul')}}
            {{Form::text('title', $post->title , ['class' => 'form-control','placeholder' => 'Judul'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Keterangan')}}
            {{Form::textarea('body', $post->body , ['id'=>'article-ckeditor','class' => 'form-control','placeholder' => 'Masukan apa yang kamu pikirkan'])}}
        </div>
        <div class="form-group">
            {{-- <input type="file" accept=".csv" /> --}}
            {{Form::file('cover_image')}}
        </div>
        
        {{Form::hidden('_method ','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
@endsection