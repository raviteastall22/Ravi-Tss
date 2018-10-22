@include('layouts.header')
    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 9999; /* Sit on top */
            padding-top: 100px; /* Location of the box */ 
            left: 0;
            top: 0; 
            max-height:100%; 
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin-top: -20px;
        }
        .close:hover,.close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <!--<div class="page-loader p-hidden" id="page-loader">
		<div>
			<div class=""><img src="img/gif-6.gif"></div>
		</div>
	</div> -->
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
                        <li class="tab col s3"><a href="#test2">Register As Individual</a></li>
                    </ul>
                </div> 
                <div class="col s12 m6 l12"  id="test1">
                    <div class="card work-item mockups ">
                        <div class="contact-form card-panel">
                            <form id="transporter_form" method="POST" > <!-- action="{{ route('register') }}"  -->
                                @csrf
                                <h5>Organization Details</h5>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="comp_name" class="form-element-field" placeholder="Please fill in your company name" type="input" name="comp_name" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="comp_name">Company Name</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_comp_name"></strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="country" class="form-element-field autocomplete" placeholder="Please fill in your country" type="input" name="country" onchange="return changecountry();" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="Country">Country</label>
                                            <small class="form-element-hint" role="alert" style="display:none;"> 
                                                <strong id="msg_country"> </strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="city" class="form-element-field" placeholder="Please fill in your city" type="input" name="city" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="city">City</label>
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong is="msg_city"></strong>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <h5>Representative Details</h5>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="transporter_name" class="form-element-field" placeholder="Please fill in your name" type="input" name="transporter_name" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="transporter_name">Name</label>
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong id="msg_transporter_name"></strong>
                                            </small>
                                        </div>
                                    </div> 
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="email" class="form-element-field" placeholder="Only official email id " type="email" name="email" onkeyup="set_username();" autocomplete="off" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="email">Email</label>
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong id="msg_email"></strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="mobile" class="form-element-field" placeholder="Please fill in your mobile number" type="mobile" name="mobile" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="mobile">Mobile Number</label>
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong id="msg_mobile"></strong>
                                            </small>
                                        </div>
                                    </div> 
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="designation" class="form-element-field" placeholder="Please fill in your designation" type="input" name="designation" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="designation">Designation</label>
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong id="msg_designation"> </strong>
                                            </small>
                                        </div>
                                    </div>
                                </div> 
                                <h5>Vehicle Type</h5>
                                <div class="row">
                                    <div class="form-checkbox form-checkbox-inline">
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label" >
                                                <input name="vehicle_type[]" class="form-checkbox-field" onclick="toggleCheck(this.id)" id="small" type="checkbox" value="Small" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Small</span>
                                            </label> 
                                            <div class="form-element form-input" id="small1" style="display:none;">
                                                <input id="Vehicle1" name="no_of_vehicle[]" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle1">No. Of Vehicles</label>
                                            </div>
                                        </div> 
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name="vehicle_type[]" class="form-checkbox-field" onclick="toggleCheck(this.id)" id="light" type="checkbox" value="Light" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Light</span>
                                            </label>
                                            <div class="form-element form-input" id="light1" style="display:none;">
                                                    <input id="Vehicle2" name="no_of_vehicle[]" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                    <div class="form-element-bar"></div>
                                                    <label class="form-element-label" for="Vehicle2"> No. Of Vehicles</label>
                                                </div>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name="vehicle_type[]" class="form-checkbox-field" onclick="toggleCheck(this.id)" id="medium" type="checkbox" value="Medium" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Medium</span>
                                            </label>
                                            <div class="form-element form-input" id="medium1" style="display:none;">
                                                <input id="Vehicle3" name="no_of_vehicle[]" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle3"> No. Of Vehicles</label>
                                            </div>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name="vehicle_type[]" class="form-checkbox-field" onclick="toggleCheck(this.id)" id="heavy" type="checkbox" value="Heavy" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Heavy</span>
                                            </label>
                                            <div class="form-element form-input" id="heavy1" style="display:none;">
                                                <input id="Vehicle4" name="no_of_vehicle[]" class="form-element-field" placeholder="No. of vehicles" type="number" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle4"> No. Of Vehicles</label>
                                            </div>
                                        </div>
                                        <div class="col s12 m12 l2">
                                            <label class="form-checkbox-label">
                                                <input name="vehicle_type[]" class="form-checkbox-field" onclick="toggleCheck(this.id)" id="specialized" type="checkbox" value="Specialized" />
                                                <i class="form-checkbox-button"></i>
                                                <span>Specialized</span>
                                            </label>
                                            <div class="form-element form-input" id="specialized1" style="display:none;">
                                                <input id="Vehicle5" name="no_of_vehicle[]" class="form-element-field" placeholder="Specialization Area" type="input" />
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="Vehicle5"> Specialization Area</label>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="form-element-hint" role="alert" style="color:red;display:none;" >
                                        <strong id="msg_vehicle_type"></strong>
                                    </small>
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
                                        <small class="form-element-hint" role="alert" style="color:red;display:none;" >
                                            <strong id="msg_service"></strong>
                                        </small>
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
                                    <small class="form-element-hint" role="alert" style="color:red;display:none;">
                                        <strong id="msg_brokerage"></strong>
                                    </small>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="transport_username" class="form-element-field" placeholder="Only official email id and default username" type="input" name="transport_username" readonly />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="transport_username">Username</label>
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong id="msg_transport_username"></strong>
                                            </small>
                                        </div>
                                    </div> 
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="transport_password" class="form-element-field" placeholder="Please fill in your password" type="password" name="transport_password" />
                                            <div class="form-element-bar"></div>
                                            <a onclick="show_password('transport_password')" style="float: right;position: absolute;right: 0;top: 0px;cursor: pointer;" class="material-icons dp48">remove_red_eye</a>
                                            <label class="form-element-label" for="transport_password">
                                            Password </label> 
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong id="msg_transport_password"></strong>
                                            </small>
                                        </div> 
                                    </div>
                                    <div class="col s12 m12 l3">
                                        <div class="form-element form-input ">
                                            <input id="confirm_transport_password" class="form-element-field" placeholder="Please fill in your password" type="password" name="confirm_transport_password" />
                                            <div class="form-element-bar"></div>
                                            <a onclick="show_password('confirm_transport_password')" style="float: right;position: absolute;right: 0;top: 0px;cursor: pointer;" class="material-icons dp48">remove_red_eye</a>
                                            <label class="form-element-label" for="confirm_transport_password">Confirm Password</label>
                                            <small class="form-element-hint" role="alert" style="dispaly:none;">
                                                <strong id="msg_confirm_transport_password"></strong>
                                            </small>
                                        </div>
                                    </div>
                                </div> 
                                <div class="center-align">
                                    <div class="card icons all" style="box-shadow:none;">
                                        <button type="button" type="button" class="bt-n-2" onclick="this.form.reset();">Cancel</button>
                                        <button type="submit" class="bt-n-1" id="transport_submit">
                                            {{ __('Register Now') }}
                                        </button>
                                        <!--<a href="#" class="activator btn waves-effect waves-light" id="myBtn">
                                            <span>Register Now</span>
                                        </a> -->
                                        <div id="transporter_modal" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content" style="width: 50%;">
                                            <div class="modal-header">
                                                <span class="close" >&times;</span>
                                            </div>
                                            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
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
                                        <div id="popup-4" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
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
                                            <input id="owner_mobile" class="form-element-field" placeholder="Please fill in your mobile number" type="" name="owner_mobile" onkeyup="check_phone(this.id);" />
                                            <div class="form-element-bar"></div>
                                            <label class="form-element-label" for="owner_mobile">Mobile Number</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_owner_mobile"> </strong>
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
                                            <input id="username" class="form-element-field" placeholder="Only Mobile will be default username" type="input" name="username" readonly />
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
                                            <span toggle="#owner_password" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                                            <div class="form-element-bar"></div>
                                            <a onclick="show_password('owner_password')" style="float: right;position: absolute;right: 0;top: 0px;cursor: pointer;" class="material-icons dp48">remove_red_eye</a>
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
                                            <a onclick="show_password('owner_confirm_password')" style="float:right;position:absolute;right:0;top:0px;cursor:pointer;" class="material-icons dp48">remove_red_eye</a>
                                            <label class="form-element-label" for="owner_confirm_password">Confirm Password</label>
                                            <small class="form-element-hint" role="alert" style="display:none;">
                                                <strong id="msg_owner_confirm_password"></strong>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="center-align">
                                    <div class="card icons all" style="box-shadow:none;">
                                        <button class="bt-n-2" type="button" onclick="this.form.reset();">Cancel</button>
                                        <!--<a href="#popup-5" class="activator btn waves-effect waves-light">
                                            <span>Register Now</span>
                                        </a>-->
                                        <button type="submit" class="bt-n-1" id="owner_submit">
                                             Register Now
                                        </button>
                                        <div id="owner_modal" class="modal">
                                            <!-- Modal content -->
                                            <div class="modal-content" style="width: 50%;">
                                            <span class="close" >&times;</span>
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
                                            </div>
                                        </div>
                                        <div id="popup-5" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <!-- <h6>Please chose your Email </h6> -->
                                                
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
<div id="loader_modal" class="modal" data-backdrop="static" data-keyboard="false">
    <!-- Modal content -->
    <div class="modal-content" style="width:25%;">
        <div class="page-loader p-hidden" id="page-loader">
            <div>
                <div class=""><img src="{{ asset('public/images/gif-6.gif') }}" style="width:100%"></div>
                <!-- <p>Absolute Trucking</p> -->
            </div>
        </div>
    </div>
</div>

@extends('layouts.footer')
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script>
var loader_modal = document.getElementById('loader_modal'); 
    $("form#singal_owner_form").submit(function(){
        loader_modal.style.display = "block";
        $("#owner_submit").attr("disabled", true);
        // var email = $("#username").val();
        // var value = 'Email must be business email';
        // var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
        // if (reg.test(email)==false ){
        //     loader_modal.style.display = "none";
        //     $("#username").parent().addClass('form-has-error');
        //     $("#msg_username").parent().show();
        //     $("#msg_username").text(value);
        //     setTimeout(function(){ 
        //         $("#owner_submit").attr("disabled", false);
        //         $("#username").parent().removeClass('form-has-error');
        //         $("#msg_username").parent().hide();
        //         $("#msg_username").text('');
        //     }, 3000);
        //     return false;
        // } 
        var formData = new FormData($(this)[0]);
        $.ajax({
            url : "{{ route('single_owner') }}",
            type : "POST",
            data : formData,
            async  : false,
            success : function(data){
                loader_modal.style.display = "none";
                $("#owner_submit").attr("disabled", false);
                console.log(data);
                var res =$.parseJSON(data);
                if(res.status ==1){
                    //$('#popup-5').show();
                    var modal = document.getElementById('owner_modal');
                    modal.style.display = "block";
                } else {
                    alert('Something wrong! please try again ');
                    //$('#popup-5').show();
                }
            }, error: function(data){
                loader_modal.style.display = "none";
                $("#owner_submit").attr("disabled", false);
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
        var phone = $("#owner_mobile").val();
        $("#username").val(phone);
        // var digit = $("#"+key).val().toString()[0];
        // var value = $("#"+key).val();
        // if(digit!= 5 || value.length > 9){
        //     $("#"+key).parent().addClass('form-has-error');
        //     $("#msg_"+key).parent().show();
        //     $("#msg_"+key).text('Phone numbers start with 5 and length should be 9');
        //     $("#"+key).val('') ;
        //     setTimeout(function(){ 
        //         $("#"+key).parent().removeClass('form-has-error');
        //         $("#msg_"+key).parent().hide();
        //         $("#msg_"+key).text('');
        //     }, 3000);
        //     return false ;
        // } else {
        //     setTimeout(function(){ 
        //         $("#"+key).parent().removeClass('form-has-error');
        //         $("#msg_"+key).parent().hide();
        //         $("#msg_"+key).text('');
        //     }, 3000);
        // }
    } 
</script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
    var availablecityTags = [];
        function get_Country_Code(countryId,countryName){
            $.ajax({
                    url: "{{ route('get_country_code') }}",
                    type: "GET",
                    data: {countryId : countryId,countryName:countryName},
                    success:function(countrycodeVal) {
                        //alert(countrycodeVal);
                        $('#owner_mobile').val(countrycodeVal);
                        $('#mobile').val(countrycodeVal);
                        return false;
                    }
                });
            return false;
        }
        function getCity(countryId,countryName){
            $.ajax({
                url: "{{route('getcitylist')}}",
                type: "GET",
                data: {countryId : countryId,countryName:countryName},
                success:function(JSONValue) {
                    //console.log(JSONValue);
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
                $('#owner_mobile').val('');
                $('#mobile').val('');
            } else {
                getCity('',contryname);
                get_Country_Code('', contryname);
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
                            console.log(ui.item);
                            $('#owner_city').val("");
                            $( "#owner_country" ).val( ui.item.value );
                            var countryName =  (ui.item.value);
                            var contryname=$('#owner_country').val();
                            getCity('',countryName);
                            get_Country_Code('', contryname);
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
                            get_Country_Code('', contryname);
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
        $("form#transporter_form").submit(function(event){
            event.preventDefault();
            loader_modal.style.display = "block";
            $("#transport_submit").attr("disabled", true);
            // var email = $("#email").val();
            // var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
            // if (reg.test(email)==false ){
            //     loader_modal.style.display = "none";
            //     $("#email").parent().addClass('form-has-error');
            //     $("#msg_email").parent().show();
            //     $("#msg_email").text('Email must be business email');
            //     setTimeout(function(){ 
            //         $("#transport_submit").attr("disabled", false);
            //         $("#email").parent().removeClass('form-has-error');
            //         $("#msg_email").parent().hide();
            //         $("#msg_email").text('');
            //     }, 3000);
            //     return false;
            // }
            // var transport_username = $("#transport_username").val();
            // if (reg.test(transport_username)==false ){
            //     loader_modal.style.display = "none";
            //     $("#transport_username").parent().addClass('form-has-error');
            //     $("#msg_transport_username").parent().show();
            //     $("#msg_transport_username").text('Username must be business email');
            //     setTimeout(function(){ 
            //         $("#transport_submit").attr("disabled", false);
            //         $("#transport_username").parent().removeClass('form-has-error');
            //         $("#msg_transport_username").parent().hide();
            //         $("#msg_transport_username").text('');
            //     }, 3000);
            //     return false;
            // }
            var formData = new FormData($(this)[0]);
            $.ajax({
                url : "{{ route('register') }}",
                type : "POST",
                //data : formData,
                data:  new FormData(this),
                //async  : false,
                success : function(data){
                    console.log(data);
                    loader_modal.style.display = "none";
                    $("#transport_submit").attr("disabled", false);
                    
                    var res =$.parseJSON(data);
                    if(res.status ==1){
                        var modal = document.getElementById('transporter_modal');
                        modal.style.display = "block";
                    } else {
                        alert('Something Wrong! please try again');
                        //$('#popup-5').show();
                    }
                }, error: function(data){
                    loader_modal.style.display = "none";
                    $("#transport_submit").attr("disabled", false);
                    var rr = $.parseJSON(data.responseText) ;
                    console.log(rr.errors); //status responseJSON 422
                    $.each(rr.errors, function(key, value){
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
    
        function set_username(){
            var email = $("#email").val();
            $("#transport_username").val(email);
        }
        var modal = document.getElementById('transporter_modal');
        var modal1 = document.getElementById('owner_modal');
        var span = document.getElementsByClassName("close")[0];
        var span1 = document.getElementsByClassName("close")[1];
        span.onclick = function() {
            modal.style.display = "none";
            window.location.href="";
        }
        span1.onclick = function() {
            modal1.style.display = "none";
            window.location.href="/";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                modal1.style.display = "none";
                window.location.href="/";
            }
        } 
        function show_password(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "input";
            } else {
                x.type = "password";
            }
        }
</script>
