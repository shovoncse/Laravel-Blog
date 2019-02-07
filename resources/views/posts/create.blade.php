@extends('layouts.app')

@section('content')
 <h2>Create Posts</h2>
 {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Post title here...'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
 {!! Form::close() !!}   
@endsection
