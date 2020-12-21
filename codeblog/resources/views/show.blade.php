
@extends('layouts.app')

@section('title')
    show
@endsection





@section('content')



    <div class="row bg-white rounded-left p-4 shadow-sm mb-3">
        <div class="col-md-8">
            <h1 class="text-info "><a class="" href="{{url('/posts/show/'.$post->id)}}">{{$post->title}}</a></h1>
            <p  class="lead fa-2x pl-2">{{$post->body}}</p>
        <div class="float-right">
            <a href="{{url('/posts/edit/'.$post->id)}}" class="btn btn-outline-warning">edit</a>
            <a href="{{url('/posts/delete/'.$post->id)}}" class="btn btn-outline-danger">delete</a>
        </div>
            <div class="clearfix"></div>

        </div>
        @if($post->image!=null)
            <div class="col-md-3 offset-md-1">
                <img class="img-fluid" src="{{asset('storage/' . $post->image)}}" alt="">
            </div>
        @endif
    </div>

@endsection






