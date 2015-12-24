@extends('layouts.master')

@section('title', 'Reset password')

@section('sidebar')

@endsection

@section('content')

<h1>Reset Password</h1>
<div class="form-container">
  {!! Form::open(['url'=>'/password/reset']) !!}
   <input type="hidden" name="token" value="{{ $token }}">
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div>
      {!! Form::label('email', 'Email Address')!!}
      {!! Form::text('email', null, ['class'=>'form-field']); !!}
    </div>

    <div>
      {!! Form::label('password', 'Password')!!}
      {!! Form::password('password', ['class'=>'form-field']); !!}
    </div>

    <div>
      {!! Form::label('password_confirmation', 'Password')!!}
      {!! Form::password('password_confirmation', ['class'=>'form-field']); !!}
    </div>

    <div>
      {!! Form::Submit('Reset Password',array('class' => 'button'))!!}
    </div>
  {!! Form::close() !!}
</div>

@endsection
