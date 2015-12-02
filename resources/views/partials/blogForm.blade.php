<div class="form-group">  
        {!! Form::label('title','Blog Title')!!}
        {!!Form::text('title',null,['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('body','Blog Text') !!}
        {!!Form::textarea('body',null,['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
      </div>