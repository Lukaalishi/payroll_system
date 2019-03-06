@extends('layouts.registation')
@section('content')
    <div style="margin-right: 25%;margin-left: 25%">
        <form class="form-signin" style="margin-top: 10%;" method="post" action="{{ route('login') }}">
            @csrf
            {{--{{csrf_field()}}--}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}

                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif
            <fieldset>
                <legend>Login Panel</legend>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-circle"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" id="inlineFormInputGroup" placeholder="Username">
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="inlineFormInputGroup" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" style="float: right; alignment: right" type="submit">Sign in</button>
                <br>
                <br>
                <div class="form-group row" style="display: inline; margin-left: 2px">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"> <i class="fa fa-lock"></i> Forgot Your password</a>
                    @endif
                    <a href="{{route('users.create')}}" style="float: right"><i class="fas fa-user-plus"></i> Create an Account</a>
                </div>
            </fieldset>
        </form>
    </div>
@endsection

