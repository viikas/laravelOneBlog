@extends('layouts.master')

@section('content')

  <h1>{{ $blog->title }}</h1>

{!! Form::model($blog,['method'=>'PATCH','action'=>['BlogsController@update',$blog->id]]) !!}
    <div class="col-md-6">
     
      @include('errors.formError')
     
      @include('partials.blogForm',['submitButton'=>'Edit Blog'])
      
      {!! Form::model($blog,['method'=>'DELETE','action'=>['BlogsController@destroy',$blog->id]])!!}
        {!!Form::submit('Delete Blog',['class'=>'btn btn-danger']) !!}
      {!! Form::close() !!}

    </div>
  {!! Form::close() !!}


@endsection