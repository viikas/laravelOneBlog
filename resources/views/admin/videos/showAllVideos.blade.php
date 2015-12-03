
@extends('layouts.master')

@section('content')

    @include('partials.adminSidebar')
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><a href="{{route('videosAdmin.create') }}">Add Video</a> </h1>
          <h2 class="sub-header">My all Videos</h2>
            <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Videos Title</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($videos as $video)
                <tr>
                  <td>#</td>

                  <td><a href="{{route('videosAdmin.edit',[$video->id]) }}">{{$video->title}}</a></td>
                  <td>Yes Or No</td>
                  <td><a href="{{route('videosAdmin.edit',[$video->id]) }}">Edit</a></td>
                  <td>{!! Form::model($video,['method'=>'DELETE','action'=>['VideosController@destroy',$video->id]])!!}
                      {!!Form::submit('Delete video',['class'=>'btn btn-danger']) !!}
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