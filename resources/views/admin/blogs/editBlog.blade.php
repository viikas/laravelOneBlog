
@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/vikas/public/css/dashboard.css">
    @include('partials.adminSidebar')
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">{{ $blog->title }}</h1>
            

              {!! Form::model($blog,['method'=>'PATCH','action'=>['BlogsController@update',$blog->id]]) !!}
                  <div class="col-md-6">
                   
                    @include('errors.formError')
                   
                    @include('partials.blogForm',['submitButton'=>'Edit Blog'])
                    
                    
                               {!! Form::close() !!}

                    <!--Delete Button -->
                    {!! Form::model($blog,['method'=>'DELETE','action'=>['BlogsController@destroy',$blog->id]])!!}
                            {!!Form::submit('Delete Blog',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}

                  </div>

        </div>
      </div>
    </div>

   

@endsection