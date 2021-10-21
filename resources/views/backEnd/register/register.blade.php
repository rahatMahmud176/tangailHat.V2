@extends('backEnd.register.master')

@section('title')
    Sign Up
@endsection

@section('mainContent')
<div class="card">
    <div class="card-body">
        @if ($errors->any())
            <div style="background: #fa7a7a; padding:5px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-white">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="m-sm-4">
           {{Form::open(['route'=>'adminRegisterInfoSubmit','method'=>'POST'])}}
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control form-control-lg" type="text" name="adminName" placeholder="Enter your name" />
                </div> 
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="adminEmail" placeholder="Enter your email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Re-password</label>
                    <input class="form-control form-control-lg" type="password" name="rePassword" placeholder="Enter password Again" />
                </div>
                <div class="text-center mt-3"> 
                    <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
                    <hr>
                    <p>Have an account already? <a href="{{ route('admin/login') }}">Log in</a></p>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection