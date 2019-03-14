@extends('layouts.app')

@section('edit')
<a class="btn btn-primary" href="{{route('posts.index')}}" role="button">back</a>

<form action="{{route('posts.update' , $post)}}" method ="post">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name = "title" value = "{{$post->title}}">
  </div>

  <div class="form-group">
  <label for="exampleFormControlTextarea2" name = "description">Description</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name = "description"  value = "{{$post->description}}">{{$post->description}}</textarea>
</div>
  <select class="browser-default custom-select" name = "user_id">
    <option value="{{$post->user->id}}" >{{$post->user->name}}</option>
</select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection