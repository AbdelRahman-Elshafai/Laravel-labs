@extends('layout.app')

@section('edit')
<a href="{{route('posts.index')}}">back</a>

<form action="{{route('posts.update' , $post)}}" method ="post">
@csrf
@method('PUT')

  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name = "title" value = "{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name = "description" value = "{{$post->description}}" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection