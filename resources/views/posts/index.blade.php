@extends('layouts.app')

@section('content')
 <h2>Posts</h2>
 @if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="well">
        <h3> <a href="/posts/{{$post->id}}">{{$post -> title}}</a></h3>
        <small>Written on {{$post -> created_at}}</small>
        </div>
    @endforeach
    {{-- Pagination --}}
    {{$posts -> links()}}
 @else
    <p>No Post Found</p>
 @endif   
@endsection
