@extends('front-end.master')
@section('title')
    Register 
@endsection
@section('content') 
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="breadcrumbs-area">
            <ul>
                <li><a href="#">Home</a> -</li>
                <li class="active">SignUp Page</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb--sm mx-auto">
                <div class="gradient-wrapper">
                    <div class="gradient-title">
                        <h2>SignUp From</h2>
                    </div>
                    <div class="input-layout1 gradient-padding post-ad-page">
                        {{-- <form id="post-add-form"> --}}
                        {{ Form::open(['route'=>'customer-register','id'=>'post-add-form']) }}  
                            <div class="border-bottom-2 mb-50 pb-30">
                                
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="seller-name">Name<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input required maxlength="40" name="name" value="{{ old('name') }}" type="text" id="seller-name" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="seller-mail">Email<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input required maxlength="120" name="email" value="{{ old('email') }}" type="email" id="seller-mail" class="form-control" placeholder="Enter Your E-mail Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="phone">Phone<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input required name="phn_no" minlength="11" maxlength="20" value="{{ old('phn_no') }}" type="text" id="phone" class="form-control" placeholder="Enter your Mobile">
                                         </div>
                                    </div>
                                </div>
                                 
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="district">District<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select required name="district_id" id="district" class='select2'>
                                                    <option selected disabled value="">Select your District</option>
                                                    @foreach ($districts as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="upozillas">Upazila<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select required name="upozilla_id" id="upozillas" class='select2'>
                                                    <option selected disabled value="">Select your Upazila</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="union">Union<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select required name="union_id" id="union" class='select2'>
                                                    <option selected disabled value="">Select your Union</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="zip-code">Password<span> *</span></label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                        <div class="form-group">
                                            <input required name="password" value="{{ old('password') }}" type="text" id="zip-code" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="zip-code">Re-Password<span> *</span></label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                        <div class="form-group">
                                            <input required name="re_password" value="{{ old('re_password') }}" type="text" id="zip-code" class="form-control" placeholder="Enter Your Password again">
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="float-right">Already Have An Account? Click here..</a>
                            </div>
                            
                            <div class="form-group mt-20">
                                <button type="submit" class="cp-default-btn-sm">SignUp Now!</button>
                            </div>
                        {{ Form::close() }} 
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!-- Login Area End Here -->

@endsection