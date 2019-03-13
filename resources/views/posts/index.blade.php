
@extends('layout.app')


@section('content')
<a class="btn btn-primary" href="{{route('posts.create')}}" role="button">Create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->created_at->format('Y-m-d')}}</td>
      <td>
            <form action="{{route('posts.destroy' , $post->id)}}" method ="post">

      <a class="btn btn-primary" href="{{route('posts.show' , $post->id)}}" role="button">View</a>
      <a class="btn btn-primary" href="{{route('posts.edit' , $post->id)}}" role="button">Edit</a>

        @method('DELETE')
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')" >Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection