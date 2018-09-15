<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    </head>
    <body class="text-center">

        {!! Form::open(['route' => 'login', 'class' => 'form-signin']); !!}
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        {!! Form::label('email', __('E-Mail Address'), ['class' => 'sr-only']); !!}
        @php $control = $errors->has('email') ? ' is-invalid' : ''; @endphp
        {!! Form::email('email', old('email'), ['class' => 'form-control'.$control, 'required' => true, 'autofocus' => true, 'placeholder' => __('E-Mail Address') ]); !!}
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        {!! Form::label('password', __('Password'), ['class' => 'sr-only']); !!}
        @php $control = $errors->has('password') ? ' is-invalid' : ''; @endphp
        {!! Form::password('password', ['class' => 'form-control'.$control, 'required' => true, 'placeholder' => __('Password')]); !!}
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        <div class="checkbox mb-3">
            {!! Form::checkbox('remember', '', old('remember') ? true : false, ['class' => 'form-check-input']); !!} {{ __('Remember Me') }}
        </div>
        {!! Form::submit(__('Login'), ['class' => 'btn btn-lg btn-primary btn-block']) !!}
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
        {!! Form::close() !!}
        
    </body>
</html>
