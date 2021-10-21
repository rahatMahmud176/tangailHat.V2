@extends('backEnd.register.master')

@section('title')
    Login
@endsection

@section('mainContent')
<div class="card">
    <div class="card-body">
        <div class="m-sm-4"> 
            {{ Form::open(['route'=>'adminLoginInfoSubmit','method'=>'POST']) }}
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                    <small>
                    <a href="index.html">Forgot password?</a>
                    </small> 
                        </div>
                               <div>
                                  <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                    <span class="form-check-label">
                    Remember me next time
                    </span>
                    </label>
                </div>
                <div class="text-center mt-3"> 
                    <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                    <hr>
                    Are You new Here? Please <a href="{{ route('admin/register') }}">Sing up.</a>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection