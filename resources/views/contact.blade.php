@extends('layout')

@section('content')
    <h1>{{ __('Contact') }}</h1>
    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="subject" name="subject" placeholder="Titulo" value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="message" id="" cols="30" rows="10">{{ old('message') }}</textarea><br>
        {!! $errors->first('message', '<small>:message</small><br>') !!}

        <button>@lang('Send')</button>
    </form>
@endsection