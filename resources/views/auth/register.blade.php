@extends('layouts.master')

@section('title', 'Login')

@section('sidebar')

@endsection

@section('content')

<h1>Register</h1>
<div class="form-container">
  {!! Form::open() !!}

    <div>
      {!! Form::label('name', 'Name')!!}
      {!! Form::text('name', null, ['class'=>'form-field']); !!}
    </div>

    <div>
      {!! Form::label('email', 'Email Address')!!}
      {!! Form::text('email', null, ['class'=>'form-field']); !!}
    </div>

    <div>
      {!! Form::label('password', 'Password')!!}
      {!! Form::password('password', ['class'=>'form-field']); !!}
    </div>

    <div>
      {!! Form::label('password_confirmation', 'Confirm Password')!!}
      {!! Form::password('password_confirmation', ['class'=>'form-field']); !!}
    </div>

    <div>
      {!! Form::Submit('Reset Password',array('class' => 'button'))!!}
    </div>
  {!! Form::close() !!}
</div>

@endsection
