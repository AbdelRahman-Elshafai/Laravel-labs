@extends('layouts.app')

@section('show')
<div class="panel panel-default">
  <div class="panel-heading">Post Info</div>
  <div class="panel-body">Title: {{$post->title}}</div>
  <div class="panel-body">Description: {{$post->description}}</div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">Post Creator Info</div>
  <div class="panel-body">Name: {{$post->user->name}}</div>
  <div class="panel-body">Email: {{$post->user->email}}</div>
  <div class="panel-body">Created At: {{$post->human_readable_date}}</div>
</div>

<a class="btn btn-primary" href="{{route('posts.index')}}" role="button">back</a>

@endsection