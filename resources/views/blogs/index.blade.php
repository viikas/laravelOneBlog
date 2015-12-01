@extends('layouts.master')

@section('content')
  <h1>My latest Blogs</h1>

  @foreach($blogs as $blog)
    <a href="blogs/{{$blog->id }}"><h3>{{$blog->title}}</h3></a>
    <p>{{$blog->body}}</p>
  @endforeach
@endsection