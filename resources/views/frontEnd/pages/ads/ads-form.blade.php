@extends('frontEnd.master')

@section('title')
    Post An Ads
@endsection
@section('mainContent')
    <div class="row mt-5    ">
        <div class="container mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4 solaimanlipi">বিজ্ঞাপন দেয়ার ফর্মটি পূরণ করুনঃ-</h4>
    
                        <div id="progrss-wizard" class="twitter-bs-wizard">
                            <ul class="twitter-bs-wizard-nav nav-justified">
                                <li class="nav-item">
                                    <a href="#progress-seller-details" class="nav-link solaimanlipi" data-toggle="tab">
                                        <span class="step-number mr-2 solaimanlipi">০১</span>
                                        বিজ্ঞাপনদাতার পরিচয়ঃ-
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#progress-company-document" class="nav-link solaimanlipi" data-toggle="tab">
                                        <span class="step-number mr-2">০২</span>
                                        পণ্যের বিবরণঃ-
                                    </a>
                                </li>
    
                                <li class="nav-item">
                                    <a href="#progress-bank-detail" class="nav-link solaimanlipi" data-toggle="tab">
                                        <span class="step-number mr-2">০৩</span>
                                        অতিরিক্ত তথ্যঃ-
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#progress-confirm-detail" class="nav-link solaimanlipi" data-toggle="tab">
                                        <span class="step-number mr-2">০৪</span>
                                        নিশ্চিত করুনঃ-
                                    </a>
                                </li>
                            </ul>
    
                            <div id="bar" class="progress mt-4">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                            </div>
                            <div class="tab-content twitter-bs-wizard-tab-content">
                                <div class="tab-pane" id="progress-seller-details">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="basicpill-firstname-input">First name</label>
                                                    <input type="text" class="form-control" id="basicpill-firstname-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="basicpill-lastname-input">Last name</label>
                                                    <input type="text" class="form-control" id="basicpill-lastname-input">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="basicpill-phoneno-input">Phone</label>
                                                    <input type="text" class="form-control" id="basicpill-phoneno-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="basicpill-email-input">Email</label>
                                                    <input type="email" class="form-control" id="basicpill-email-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="basicpill-address-input">Address</label>
                                                    <textarea id="basicpill-address-input" class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="progress-company-document">
                                    <div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-pancard-input">PAN Card</label>
                                                        <input type="text" class="form-control" id="basicpill-pancard-input">
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-vatno-input">VAT/TIN No.</label>
                                                        <input type="text" class="form-control" id="basicpill-vatno-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-cstno-input">CST No.</label>
                                                        <input type="text" class="form-control" id="basicpill-cstno-input">
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-servicetax-input">Service Tax No.</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-servicetax-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-companyuin-input">Company UIN</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-companyuin-input">
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-declaration-input">Declaration</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-Declaration-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="progress-bank-detail">
                                    <div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-namecard-input">Name on Card</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-namecard-input">
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Credit Card Type</label>
                                                        <select class="custom-select">
                                                            <option selected>Select Card Type</option>
                                                            <option value="AE">American Express</option>
                                                            <option value="VI">Visa</option>
                                                            <option value="MC">MasterCard</option>
                                                            <option value="DI">Discover</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-cardno-input">Credit Card Number</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-cardno-input">
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-card-verification-input">Card Verification
                                                            Number</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-card-verification-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-expiration-input">Expiration Date</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-expiration-input">
                                                    </div>
                                                </div>
    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="progress-confirm-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                </div>
                                                <div class="solaimanlipi">
                                                    <h5 class="solaimanlipi">বিজ্ঞাপনটি প্রস্তুত হয়েছে!</h5>
                                                    <p class="text-muted solaimanlipi"> আপনার দেয়া তথ্যগুলি নেয়া হয়েছে,আপনি "নিশ্চিত করুন" বাটনে ক্লিক করে বিজ্ঞাপনটি পাব্লিসড করে দিন।</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pager wizard twitter-bs-wizard-pager-link solaimanlipi">
                                <li class="previous solaimanlipi"><a href="#">আগেযান</a></li>
                                <li class="next solaimanlipi"><a href="#">নিশ্চিত করুন</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
