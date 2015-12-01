@extends('app')

@section('content')

    <form method="POST" action="/password/reset">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="form-control">
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-control">
            Password
            <input type="password" name="password">
        </div>

        <div class="form-control">
            Confirm Password
            <input type="password" name="password_confirmation">
        </div>

        <div>
            <button class="btn btn-primary" type="submit">
                Reset Password
            </button>
        </div>
    </form>

@stop