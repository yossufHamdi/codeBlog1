@extends('layouts.app')

@section('title')
    posts
@endsection





@section('content')
    @foreach($posts as $post)
        <div  class="bg-white rounded-left p-4 shadow-sm mb-3">
            <h1 class="text-info "><a class="" href="{{url('/posts/show/'.$post->id)}}">{{$post->title}}</a></h1>
            <p  class="lead fa-2x pl-2">{{$post->body}}</p>
        </div>

    @endforeach


@endsection






