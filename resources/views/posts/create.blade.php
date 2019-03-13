@extends('layout.app')

@section('create')
<a href="{{route('posts.index')}}">back</a>

<form action="{{route('posts.store')}}" method ="post">
@csrf

  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name = "title" >
  </div>

<div class="form-group">
  <label for="exampleFormControlTextarea2" name = "description">Description</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name = "description"></textarea>
</div>
  <select class="browser-default custom-select" name = "user_id">
  @foreach($users as $user)
    <option value="{{$user->id}}" >{{$user->name}}</option>
    @endforeach
</select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection