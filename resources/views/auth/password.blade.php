@extends('layouts.master')

@section('title', 'Login')

@section('sidebar')

@endsection

@section('content')
<h1>Reset Password</h1>
<div class="form-container">
  {!! Form::open() !!}
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
      {!! Form::Submit('Reset Password',array('class' => 'button'))!!}
    </div>
  {!! Form::close() !!}
</div>

@endsection
