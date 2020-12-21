@extends('layouts/app')
@section('title')
    tags
@endsection


@section('content')
    @foreach($tags as $tag)
    <a class="fa-2x p-1" href="#">{{$tag->name}}</a>
    <br>
    @endforeach
@endsection
