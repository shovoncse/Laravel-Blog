@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h2>{{$post->title}}</h2>
    <img src="/storage/cover_images/{{$post->cover_image}}" alt="Blog Cover Image" class="img-responsive">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post -> user ->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>
            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    
@endsection