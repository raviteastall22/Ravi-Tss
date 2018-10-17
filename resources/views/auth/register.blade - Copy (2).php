@extends('layouts.header')
    <main>
        <div class="container scrollspy" id="started-section">
            <div class="section started">
                <div class="card profile">
                    <div class="nav-wrapper ex-t">
                        <div class="center-align">
                            <img class="avatar circle" src="{{ asset('public/images/logo-1.png')}}" alt="">
                            <p>We at TRUXAI, unanimously envision to bring paradigm shift in trucking eco-systom, by synchronizing "Human Trucking Expertize" and "Smart Trucking".</p>
                        </div>
                    </div>
                    <div class="card-image" style="background-image: url({{ asset('public/images/user-profile-bg.jpg')}});"></div>
                </div>
            </div>
            <div class="section works scrollspy" id="works-section">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#test1">Register As Transporter</a></li>
                        <li class="tab col s3"><a href="#test2">Register As Indivisual</a></li>
                    </ul>
                </div> 
                <div class="col s12 m6 l12"  id="test1">
                    <div class="card work-item mockups ">
                        <div class="contact-form card-panel">
                            <form id="cform" method="POST" action="{{ route('register') }}" >
                                @csrf
                                <h5>Organization Details</h5>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('comp_name') ? ' form-has-error' : '' }}">
                                            <input id="comp_name" class="form-element-field" placeholder="Please fill in your company name" type="input" name="comp_name" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="comp_name">Company Name</label>
                                            @if ($errors->has('comp_name'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('comp_name') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('country') ? ' form-has-error' : '' }}">
                                            <input id="country" class="form-element-field autocomplete" placeholder="Please fill in your country" type="input" name="country" onchange="return changecountry();" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="Country">Country</label>
                                            @if ($errors->has('country'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('city') ? ' form-has-error' : '' }}">
                                            <input id="city" class="form-element-field" placeholder="Please fill in your city" type="input" name="city" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="city">City</label>
                                            @if ($errors->has('city'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h5>Representative Details</h5>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('transporter_name') ? ' form-has-error' : '' }}">
                                            <input id="transporter_name" class="form-element-field" placeholder="Please fill in your name" type="input" name="transporter_name" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="transporter_name">Name</label>
                                            @if ($errors->has('transporter_name')) 
                                                <small class="form-element-hint" role="alert"> 
                                                    <strong>{{ $errors->first('transporter_name') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('email') ? ' form-has-error' : '' }}">
                                            <input id="email" class="form-element-field" placeholder="Only official email id " type="email" name="email" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="email">Email</label>
                                            @if ($errors->has('email'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('mobile') ? ' form-has-error' : '' }}">
                                            <input id="mobile" class="form-element-field" placeholder="Please fill in your mobile number" type="number" name="mobile" onkeyup="check_phone(this.id);" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="mobile">Mobile Number</label>
                                            @if ($errors->has('mobile'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('designation') ? ' form-has-error' : '' }}">
                                            <input id="designation" class="form-element-field" placeholder="Please fill in your designation" type="input" name="designation" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="designation">Designation</label>
                                            @if ($errors->has('designation'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('designation') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div> 
                                <h5>Vehicle Type</h5>
                                <div class="row">
                                    <div class="form-checkbox form-checkbox-inline">
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label" >
                                                <input name="rap" class="form-checkbox-field" onclick="toggleCheck(this.id)" id="small" type="checkbox" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Small</span>
                                            </label> 
                                            <div class="form-element form-input" id="small1" style="display:none;">
                                                <input id="Vehicle1" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle1">No. Of Vehicles</label>
                                            </div>
                                        </div> 
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name=pop class="form-checkbox-field" onclick="toggleCheck(this.id)" id="light" type="checkbox" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Light</span>
                                            </label>
                                            <div class="form-element form-input" id="light1" style="display:none;">
                                                    <input id="Vehicle2" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                    <div class="form-element-bar"></div>
                                                    <label class="form-element-label" for="Vehicle2"> No. Of Vehicles</label>
                                                </div>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name=rock class="form-checkbox-field" onclick="toggleCheck(this.id)" id="medium" type="checkbox" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Medium</span>
                                            </label>
                                            <div class="form-element form-input" id="medium1" style="display:none;">
                                                <input id="Vehicle3" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle3"> No. Of Vehicles</label>
                                            </div>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name=metal class="form-checkbox-field" onclick="toggleCheck(this.id)" id="heavy" type="checkbox" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Heavy</span>
                                            </label>
                                            <div class="form-element form-input" id="heavy1" style="display:none;">
                                                <input id="Vehicle4" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle4"> No. Of Vehicles</label>
                                            </div>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name=r_b class="form-checkbox-field" onclick="toggleCheck(this.id)" id="specialized" type="checkbox" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Specialized</span>
                                            </label>
                                            <div class="form-element form-input" id="specialized1" style="display:none;">
                                                <input id="Vehicle5" class="form-element-field" placeholder="Specialization Area" type="input" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle5"> Specialization Area</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5>Service provided</h5>
                                <div class="row">
                                    <div class="form-radio form-radio-inline">
                                        <div class="col s12 m12 l2">
                                            <label class="form-radio-label">
                                                <input name="service" class="form-radio-field" type="radio" value="Inter State" />
                                                <i class="form-radio-button"></i>
                                                <span>Inter State</span>
                                            </label>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-radio-label">
                                                <input name="service" class="form-radio-field" type="radio" value="Intra State" />
                                                <i class="form-radio-button"></i>
                                                <span>Intra State</span>
                                            </label>
                                        </div>
                                        <div class="col s12 m12 l4">
                                            <label class="form-radio-label">
                                                <input name="service" class="form-radio-field" type="radio" value="Cross Border" checked />
                                                <i class="form-radio-button"></i>
                                                <span>Cross Border</span>
                                            </label>
                                        </div> <br />
                                        @if ($errors->has('service'))
                                            <small class="form-element-hint" role="alert" style="color:red;">
                                                <strong>{{ $errors->first('service') }}</strong>
                                            </small>
                                        @endif
                                    </div> 
                                </div>
                                <h5 style="margin-top: 25px;">Do you handle brokerage also</h5>
                                <div class="row">
                                    <div class="form-radio form-radio-inline">
                                        <div class="col s12 m12 l2">
                                            <label class="form-radio-label">
                                                <input name="brokerage" class="form-radio-field" type="radio" value="1" checked />
                                                <i class="form-radio-button"></i>
                                                <span>Yes</span>
                                            </label>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-radio-label">
                                                <input name="brokerage" class="form-radio-field" type="radio" value="0" />
                                                <i class="form-radio-button"></i>
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div> <br />
                                    @if ($errors->has('brokerage'))
                                        <small class="form-element-hint" role="alert" style="color:red;">
                                            <strong>{{ $errors->first('brokerage') }}</strong>
                                        </small>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('transport_username') ? ' form-has-error' : '' }}">
                                            <input id="transport_username" class="form-element-field" placeholder="Only official email id and default username" type="input" name="transport_username" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="transport_username">Username</label>
                                            @if ($errors->has('transport_username'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('transport_username') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('transport_password') ? ' form-has-error' : '' }}">
                                            <input id="transport_password" class="form-element-field" placeholder="Please fill in your password" type="password" name="transport_password" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="transport_password">Password</label>
                                            @if ($errors->has('transport_password'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('transport_password') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input {{ $errors->has('confirm_transport_password') ? ' form-has-error' : '' }}">
                                            <input id="confirm_transport_password" class="form-element-field" placeholder="Please fill in your password" type="password" name="confirm_transport_password" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="confirm_transport_password">Confirm Password</label>
                                            @if ($errors->has('confirm_transport_password'))
                                                <small class="form-element-hint" role="alert">
                                                    <strong>{{ $errors->first('confirm_transport_password') }}</strong>
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div> 
                                <div class="center-align">
                                    <div class="card icons all" style="box-shadow:none;">
                                        <button type="button" class="bt-n-2">Cancel</button>
                                        <button type="submit" class="bt-n-1">
                                            {{ __('Register Now') }}
                                        </button>
                                        <!--<button type="submit"  class="bt-n-1"> Register Now </button> -->
                                        <!-- <a href="#popup-4" class="activator btn waves-effect waves-light">
                                            <span>Register Now</span>
                                        </a> -->
                                        <div id="popup-4" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <!-- <h6>Please chose your Email </h6> -->
                                                <div class="image center-align">
                                                    <img src="{{ asset('public/images/i-4.png') }}" alt="">
                                                </div>
                                                <div class="">
                                                    <p> 
                                                        <b>Great, you have successfully registered yourself with Trux AI. One verification email has been sent to you. Kindly verify your account for further proceeding.</b>
                                                    </p>
                                                    <div class="image center-align" style="margin-top: 40px">
                                                        <a href=""><img src="{{ asset('public/images/i-1.png') }}" alt=""></a>
                                                        <a href=""><img src="{{ asset('public/images/i-2.png') }}" alt=""></a>
                                                        <a href=""><img src="{{ asset('public/images/i-3.png') }}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="alert-success">
                                <p>Thanks, your message is sent successfully. We will contact you shortly!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l12" id="test2">
                    <div class="card work-item graphics ">
                        <div class="contact-form card-panel">
                            <form id="singal_owner_form" method="POST"  > <!-- action="{{ route('single_owner') }}"-->
                                @csrf
                                <h5>Organization Details</h5>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="owner_comp_name" class="form-element-field" placeholder="Please fill in your company name" type="input" name="owner_comp_name" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="owner_comp_name">Company Name</label>
                                            <small class="form-element-hint" role="alert" style="diplay:none;">
                                                <strong id="msg_owner_comp_name"></strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="owner_country" class="form-element-field autocomplete country" placeholder="Please fill in your country" type="input" name="owner_country" onchange="return changecountry();" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="owner_country">Country</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_owner_country"> </strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="owner_city" class="form-element-field city" placeholder="Please fill in your city" type="input" name="owner_city" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="owner_city">City</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong style="msg_owner_city"> </strong>
                                            </small>
                                        </div>
                                    </div>
                                </div>  
                                <h5>Representative Details</h5>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="owner_name" class="form-element-field " placeholder="Please fill in your name" type="input" name="owner_name" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="owner_name">Name</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_owner_name"> </strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="mobile" class="form-element-field" placeholder="Please fill in your mobile number" type="number" name="mobile" onkeyup="check_phone(this.id);" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="mobile">Mobile Number</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_mobile"> </strong>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <h5>Service provided</h5>
                                <div class="row">
                                    <div class="form-radio form-radio-inline">
                                        <div class="col s12 m12 l2">
                                            <label class="form-radio-label">
                                                <input name="owner_service" class="form-radio-field" type="radio" value="Domestic" />
                                                <i class="form-radio-button"></i>
                                                <span>Domestic</span>
                                            </label>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-radio-label">
                                                <input name="owner_service" class="form-radio-field" type="radio" value="Cross Border" checked />
                                                <i class="form-radio-button"></i>
                                                <span>Cross Border</span>
                                            </label>
                                        </div>
                                        <div class="col s12 m12 l4">
                                            <label class="form-radio-label">
                                                <input name="owner_service" class="form-radio-field" type="radio" value="Container Movement" />
                                                <i class="form-radio-button"></i>
                                                <span>Container Movement</span>
                                            </label>
                                        </div>
                                    </div>
                                    <small class="form-element-hint" role="alert" style="display:none;">
                                        <strong id="msg_owner_service"></strong>
                                    </small>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="username" class="form-element-field" placeholder="Only official email id and default username" type="input" name="username" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="username">Username</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_username"></strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="owner_password" class="form-element-field" placeholder="Please fill in your password" type="password" name="owner_password" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="owner_password"> Password</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_owner_password"></strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="owner_confirm_password" class="form-element-field" placeholder="Please fill in your password" type="password" name="owner_confirm_password" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="owner_confirm_password">Confirm Password</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_owner_confirm_password"></strong>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="center-align">
                                    <div class="card icons all" style="box-shadow:none;">
                                        <button class="bt-n-2">Cancel</button>
                                        <!--<a href="#popup-5" class="activator btn waves-effect waves-light">
                                            <span>Register Now</span>
                                        </a>-->
                                        <button type="submit" class="bt-n-1">
                                             Register Now
                                        </button>
                                        <div id="popup-5" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <!-- <h6>Please chose your Email </h6> -->
                                                <div class="image center-align">
                                                    <img src="{{ asset('public/images/i-4.png') }}" alt="">
                                                </div>
                                                <div class="">
                                                    <p>
                                                        <b>Great, you have successfully registered yourself with Trux AI. An OTP has been sent to you on your provided mobile number. Kindly verify yourself for further proceedings by entereing that OTP.</b>
                                                    </p>
                                                    <div style="margin-top: 40px;">
                                                        <div class="col s6 m6 l6">
                                                            <div class="form-element form-input"  style="max-width: 250px;">
                                                                <input id="OTP" class="form-element-field" placeholder="Please enter your OTP" type="input" value="" />
                                                                <div class="form-element-bar"></div>
                                                                <label class="form-element-label" for="OTP">Enter OTP</label>
                                                            </div>
                                                            <a style="float: right;top: -69px;" href="#popup-5" class="activator btn waves-effect waves-light">
                                                                    <span>verify</span>
                                                                </a>

                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <p style="display: none">
                                                    <b>"HURRAY!!! WELCOME TO THE WORLD'S FASTEST GROWING TRANSPORTATION ENVIRONMENT. TRUXAI REPRESENTATIVE SHALL REACH YOU WITHIN THE NEXT 24 HOURS. TILL THEN,  STAY TUNED."</b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="alert-success">
                                <p>Thanks, your message is sent successfully. We will contact you shortly!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.footer')
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!--<script src="{{ asset('public/js/jquery.min.js.download') }}"></script>-->
<script>
    $("form#singal_owner_form").submit(function(){
        var email = $("#username").val();
        //var email = $('#email').val();s
        var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
        if (reg.test(email)==false ){
            $("#username").parent().addClass('form-has-error');
            $("#username").parent().show();
            $("#username").text(value);
            setTimeout(function(){ 
                $("#username").parent().removeClass('form-has-error');
                $("#username").parent().hide();
                $("#username").text('');
            }, 3000);
            return false;
        }
        var formData = new FormData($(this)[0]);
        $.ajax({
            url : "{{ route('single_owner') }}",
            type : "POST",
            data : formData,
            async  : false,
            success : function(data){
                console.log(data);
                var res =$.parseJSON(data);
                //
                if(res.status ==1){
                    $('#popup-5').show();
                } else {
                    $('#popup-5').show();
                }
            }, error: function(data){
                var rr = $.parseJSON(data.responseText) ;
                console.log(rr.errors); //status responseJSON 422
                $.each(rr.errors, function(key, value){
                    //alert(key + '--'+value) ;
                    $("#"+key).parent().addClass('form-has-error');
                    $("#msg_"+key).parent().show();
                    $("#msg_"+key).text(value);
                    setTimeout(function(){ 
                        $("#"+key).parent().removeClass('form-has-error');
                        $("#msg_"+key).parent().hide();
                        $("#msg_"+key).text('');
                    }, 3000);
                });
            },
            cache : false ,
            contentType : false ,
            processData : false
        }) ;
        return false ;
    }) ;
    function check_phone(key){
        var digit = $("#"+key).val().toString()[0];
        var value = $("#"+key).val();
        if(digit!= 5 || value.length > 9){
        
            $("#"+key).parent().addClass('form-has-error');
            $("#msg_"+key).parent().show();
            $("#msg_"+key).text('Phone numbers start with 5 and length should be 9');

            $("#"+key).val('') ;
            setTimeout(function(){ 
                $("#"+key).parent().removeClass('form-has-error');
                $("#msg_"+key).parent().hide();
                $("#msg_"+key).text('');
            }, 3000);
            return false ;
        } else {
            setTimeout(function(){ 
                $("#"+key).parent().removeClass('form-has-error');
                $("#msg_"+key).parent().hide();
                $("#msg_"+key).text('');
            }, 3000);
        }
    } 
    
    </script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
    var availablecityTags = [];
    function getCity(countryId,countryName){
        $.ajax({
            url: "{{route('getcitylist')}}",
            type: "GET",
            data: {countryId : countryId,countryName:countryName},
            success:function(JSONValue) {
                callbackCity(JSONValue);
            }
        });
    } 
    function changecountry(){ 
        var contryname=$('#owner_country').val(); 
        var country = $("#country").val();
        if(contryname=="" || country ==''){
            $('#owner_city').val(""); 
            $('#city').val(""); 
        } else {
            getCity('',contryname);
        }
    }
    $(function() {
        /***********Get Country List**********/
        $.ajax({
            url: "{{ route('getCountryList') }}",
            type: "GET",
            success:function(JSONValue) { 
                availableTags = [];
                var myObj = JSON.parse(JSONValue); 
                $.each(myObj, function(key,val) {
                    var newcountry={key:key ,value: val};
                    availableTags.push(newcountry);
                });
                $( "#owner_country" ).autocomplete({
                    minLength: 0,
                    source: availableTags,
                    focus: function( event, ui ) {
                        $( "#owner_country" ).val( ui.item.value );
                        return false;
                    }, select: function( event, ui ) {
                        $('#owner_city').val("");
                        $( "#owner_country" ).val( ui.item.value );
                        var countryName =  (ui.item.value);
                        var contryname=$('#owner_country').val();
                        getCity('',countryName);
                        return false;
                    } 
                });
                $( "#country" ).autocomplete({
                    minLength: 0,
                    source: availableTags,
                    focus: function( event, ui ) {
                        $( "#country" ).val( ui.item.value );
                        return false;
                    }, select: function( event, ui ) {
                        $('#city').val("");
                        $( "#country" ).val( ui.item.value );
                        var countryName =  (ui.item.value);
                        var contryname=$('#country').val();
                        getCity('',countryName);
                        return false;
                    } 
                });
            }
        });   
    });   
    /********End Country List************/
    $( "#owner_city" ).autocomplete({
        minLength: 0,
        source: availablecityTags,
        focus: function( event, ui ) {
            $( "#owner_city" ).val( ui.item.value );
            return false;
        }, select: function( event, ui ) {
            $( "#owner_city" ).val( ui.item.value );
            return false;
        } 
    });
    $( "#city" ).autocomplete({
        minLength: 0,
        source: availablecityTags,
        focus: function( event, ui ) {
            $( "#city" ).val( ui.item.value );
            return false;
        }, select: function( event, ui ) {
            $( "#city" ).val( ui.item.value );
            return false;
        } 
    });
    function callbackCity(data) { 
        availablecityTags = [];
        var myObj = JSON.parse(data); 
        $.each(myObj, function(key,val) {
            var newcity={key:key ,value: val};
            availablecityTags.push(newcity);
        });
        $("#owner_city").autocomplete({
            minLength: 0,
            source: availablecityTags,
            focus: function( event, ui ) {
                $( "#owner_city" ).val( ui.item.value );
                return false;
            },
            select: function( event, ui ) {
                $( "#owner_city" ).val( ui.item.value );
                return false;
            } 
        });
        $("#city").autocomplete({
            minLength: 0,
            source: availablecityTags,
            focus: function( event, ui ) {
                $( "#city" ).val( ui.item.value );
                return false;
            },
            select: function( event, ui ) {
                $( "#city" ).val( ui.item.value );
                return false;
            } 
        });
    }
    $('#popup-5').addClass('mfp-hide');
</script>