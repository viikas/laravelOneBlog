@extends('layouts.master')

@section('content')
  <h1>My new Blog</h1>

  {!! Form::open(['url'=>'blogs']) !!}
    <div class="col-md-6">
     
      @include('errors.formError')
      
      @include('partials.blogForm',['submitButton'=>'Add Blog'])


      
    </div>
  {!! Form::close() !!}

@endsection