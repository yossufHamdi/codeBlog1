@extends('layouts.app')

@section('title')
    create post
@endsection





@section('content')
    <form action="{{url('/posts/update/'.$post->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>post title</label>
            <input type="text" class="form-control"  value="{{$post->title}}"  name="title" >
        </div>
        <div class="form-group">
            <label >body of the post</label>
            <textarea name="body"  class="form-control" id="" cols="30" rows="5">{{$post->body}}</textarea>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose another image</label>
            </div>
            <button type="reset" class=" btn btn-outline-danger ml-2" onclick=" <?php Storage::delete("/".$post->image)?> " >delete the old image</button>
        </div>

        <button  type="submit" class="btn btn-outline-success float-right mt-3">share post</button>
        <div class="clearfix"></div>
    </form>


@endsection
