
@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/vikas/public/css/dashboard.css">
    @include('partials.adminSidebar')
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><a href="{{route('blogsAdmin.create') }}">Add Blog</a> </h1>
          <h2 class="sub-header">My all Blogs</h2>
            <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Blog Title</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($blogs as $blog)
                <tr>
                  <td>#</td>

                  <td><a href="{{route('blogsAdmin.edit',[$blog->id]) }}">{{$blog->title}}</a></td>
                  <td>Yes Or No</td>
                  <td><a href="{{route('blogsAdmin.edit',[$blog->id]) }}">Edit</a></td>
                  <td>{!! Form::model($blog,['method'=>'DELETE','action'=>['BlogsController@destroy',$blog->id]])!!}
                      {!!Form::submit('Delete Blog',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   

@endsection