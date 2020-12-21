@extends('layouts.app')

@section('title')
    posts
@endsection





@section('content')
    <a class="text-success" href="{{url('/posts/create')}}" style="font-size: 2rem;">add new post <i class="fas fa-comment-medical  mb-3 ml-2"></i></a>
        @foreach($posts as $post)
            <div class="row bg-white rounded-left p-4 shadow-sm mb-3">
                <div class="col-md-8">
                    <h1 class="text-info "><a class="" href="{{url('/posts/show/'.$post->id)}}">{{$post->title}}</a></h1>
                    <p  class="lead fa-2x pl-2">{{$post->body}}</p>
                </div>
                @if($post->image!=null)
                    <div class="col-md-3 offset-md-1">
                        <img class="img-fluid" src="{{asset('storage/' . $post->image)}}" alt="">
                    </div>
                @endif
            </div>
        @endforeach


@endsection






