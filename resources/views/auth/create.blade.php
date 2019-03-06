@extends('layouts.registation')
@section('content')
    <div style="margin-right: 25%;margin-left: 25%">
        <form style="margin-top: 10%;" action="{{action('create_user_controller@store')}}" accept-charset="UTF-8" method="post">
            @csrf
            <fieldset>
                <legend>Registration Panel</legend>
                <div class="col-auto" style="margin-bottom: 5px">
                    <input type="text" name="fname" required class="form-control" placeholder="First Name">
                </div>
                <div class="col-auto" style="margin-bottom: 5px">
                    <input type="text" name="lname" required class="form-control" placeholder="Last Name">
                </div>
                <div class="col-auto" style="margin-bottom: 5px">
                    <input type="text" name="email" required class="form-control" placeholder="Email">
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-circle"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Confirm Password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" name="password_confirm" class="form-control" id="inlineFormInputGroup" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-auto" style="float: right; alignment: right">
                    <button class="btn btn-primary" type="submit" name="action"
                            style="color: white;  float: right">Create
                    </button>
                </div>
                <br>
                <br>
                <div class="form-group row" style="display: inline">

                    <a href="{{route('users.index')}}" style="float: left"> <i class="fas fa-user-check"></i> Already Have an Account</a>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
