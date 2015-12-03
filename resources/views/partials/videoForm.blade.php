<div class="form-group">
  {!! Form::label('title','Video Title') !!}
  {!! Form::text('title',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!! Form::label('detail','Video Detail') !!}
  {!! Form::textarea('detail',null,['class'=>'form-control','size' => '30x4'])!!}
</div>
<div class="form-group">
  {!! Form::label('video_source','Video Embed Code') !!}
  {!! Form::textarea('video_source',null,['class'=>'form-control','size' => '30x4'])!!}
</div>
<div class="form-group">
  {!! Form::label('status','Display Status') !!}<br>
  {!! Form::radio('status', 'TRUE',['class'=>'form-control']) !!}
  {!! Form::label('yes','Yes') !!}
  {!! Form::radio('status', 'FALSE',['class'=>'form-control']) !!}
  {!! Form::label('no','No') !!}  
</div>
<div class="form-group">
  {!! Form::label('type','Video Type') !!}
  {!! Form::select('type',array('Song'=>'Song', 'Movies'=>'Movies'),null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
</div>