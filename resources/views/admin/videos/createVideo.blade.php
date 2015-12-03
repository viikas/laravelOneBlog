
@extends('layouts.master')

@section('content')

    @include('partials.adminSidebar')
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">My new Video</h1>

            {!! Form::open(['url'=>'blogsAdmin']) !!}
              <div class="col-md-6">
               
                @include('errors.formError')
                
                @include('partials.videoForm',['submitButton'=>'Add Video'])


                
              </div>
            {!! Form::close() !!}

            
        </div>
      </div>
    </div>

   

@endsection