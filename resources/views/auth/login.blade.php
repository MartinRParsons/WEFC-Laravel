@extends('layouts.master')

@section('title', 'Login')

@section('sidebar')

@endsection

@section('content')

<h1>Log in</h1>
<div class="form-container">
  {!! Form::open() !!}
      <div>
          {!! Form::label('email', 'Email Address')!!}
          {!! Form::text('email', null, ['class'=>'form-field']); !!}
      </div>

      <div>
        {!! Form::label('password', 'Password')!!}
        {!! Form::password('password', ['class'=>'form-field']); !!}
      </div>

      <div>
        {!! Form::label('remember', 'Remember Me')!!}
        {!! Form::checkbox('remember'); !!}
      </div>

      <div>
        {!! Form::Submit('Login',array('class' => 'button'))!!}
        {!! Html::link('password/email', 'Reset password',['class'=>'button']) !!}
      </div>
      {!! Form::close() !!}


</div>



@endsection
