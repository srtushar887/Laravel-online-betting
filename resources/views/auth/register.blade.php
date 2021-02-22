<!doctype html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend/')}}/images/favicon.png">
    <!--Font Links-->
    <!--Plugin Links-->
    <!--CSS Links-->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/media.css">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/bbb5971462.js" crossorigin="anonymous"></script>
</head>
<body>
<section>
    <div class="container">
        <div class="bg-white">
            <!-- header bg -->
            <img src="{{asset('assets/frontend/')}}/images/create-account-header.jpg" class="img-fluid d-block w-100" alt="Register">
            <!-- content -->
            <div class="row" style="white-space: normal;">
                <!-- single -->
                <div class="col-md-3 mt-4">
                    <div style="padding: 16px;">
                        <img src="{{asset('assets/frontend/')}}/images/easy-steps.png" class="img-fluid" alt="Register">
                        <h6 class="my-3"><b>WELCOME, NEED HELP?</b></h6>
                        <img src="{{asset('assets/frontend/')}}/images/live-chat-image.jpg" class="img-fluid" alt="Register">
                        <p>support@betbox777.com</p>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-3 mt-4">
                    <div style="background: url(images/step-bg.png);background-size: cover;background-repeat: no-repeat;background-position: center;padding: 16px;    min-height: 450px;">
                        <img src="{{asset('assets/frontend/')}}/images/step1.png" class="img-fluid d-block mx-auto" alt="Register">
                        <h6 class="my-3 text-muted text-center"><b>PERSONAL INFORMATION</b></h6>
                        <form action="{{route('user.data.save')}}" method="post">
                            @csrf
                            <div>
                                <label><b>* Gender</b></label>
                            </div>
                            <div class="form-check form-check-inline form-group">
                                <input class="form-check-input" type="radio" name="gender" value="1">
                                <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check form-check-inline form-group">
                                <input class="form-check-input" type="radio" name="gender" value="2">
                                <label class="form-check-label">Female</label>
                            </div>
                            <div class="form-group">
                                <label><b>* First Name</b></label>
                                <input class="form-control" type="text" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label><b>* Last Name</b></label>
                                <input class="form-control" type="text" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label><b>* Email</b></label>
                                <input class="form-control" type="email" name="email" required>
                                <small>You MUST enter a valid email address in order to register.</small>
                            </div>
                            <div class="form-group">
                                <label><b>* Date of Birth</b></label>
                                <input class="form-control" type="date" required>
                            </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-3 mt-4">
                    <div style="background: url(images/step-bg.png);background-size: cover;background-repeat: no-repeat;background-position: center;padding: 16px;">
                        <img src="{{asset('assets/frontend/')}}/images/step2.png" class="img-fluid d-block mx-auto" alt="Register">
                        <h6 class="my-3 text-muted text-center"><b>ACCOUNT DETAILS</b></h6>
                        <div class="form-group">
                            <label><b>* Choose user name</b></label>
                            <input class="form-control" type="text" name="user_name" required>
                        </div>
                        <div class="form-group">
                            <label><b>* Choose Password</b></label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label><b>* Security Question</b></label>
                            <select class="form-control" name="qs_id" required>
                                <option value="1">Mothers maiden name</option>
                                <option value="1">Favorite hobby</option>
                                <option value="1">Favorite club</option>
                                <option value="1">Favorite book</option>
                                <option value="1">Childhood hero</option>
                                <option value="1">Best friends name</option>
                                <option value="1">My pet</option>
                                <option value="1">My nickname</option>
                                <option value="1">My first car</option>
                                <option value="1">My secret code</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>* Security Answer</b></label>
                            <input class="form-control" name="qs_ans" type="text" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn p-0 w-100 btn-block"><img src="{{asset('assets/frontend/')}}/images/sin_up.png" class="img-fluid " alt="sin_up"></button>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-3 mt-4">
                    <div style="background: url(images/step-bg.png);background-size: cover;background-repeat: no-repeat;background-position: center;padding: 16px;">
                        <img src="{{asset('assets/frontend/')}}/images/step3.png" class="img-fluid d-block mx-auto" alt="Register">
                        <h6 class="my-3 text-muted text-center"><b>CONTACT INFORMATION</b></h6>
                        <div class="form-group">
                            <label><b>* Street Address</b></label>
                            <input class="form-control" type="text" name="street" required>
                        </div>
                        <div class="form-group">
                            <label><b>* Country</b></label>
                            <select class="form-control" name="country" required>
                                <option value="-1">Please Select One</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>&gt;
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>* City</b></label>
                            <input class="form-control" type="text" name="city"  required>
                        </div>
                        <div class="form-group">
                            <label><b>* Zip</b></label>
                            <input class="form-control" type="text" name="zip" required>
                        </div>
                        <div class="form-group">
                            <label><b>* Contact Number</b></label>
                            <input class="form-control" type="tel" name="phone_number" required>
                        </div>
                        <div class="form-group">
                            <label><b>Reference ID</b></label>
                            <input class="form-control" name="ref_id" type="text">
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div style="padding: 16px">
                        <p>(Please ensure you entered a valid email address & mobile number)</p>
                        <p><img src="{{asset('assets/frontend/')}}/images/checkmuted.png" class="img-fluid mr-2" alt="check">By submitting your personal information you agree to our company's Terms & Conditions</p>
                        <p><img src="{{asset('assets/frontend/')}}/images/18plus.png" class="img-fluid mr-2" alt="18plus">You are over 18 years old.</p>
                        <p><img src="{{asset('assets/frontend/')}}/images/security.png" class="img-fluid mr-2" alt="security">Your personal information is protectedand and confidential as stated in our Privacy Policy</p>
                    </div>
                </div>
                <div class="col-md-12 mb-5 text-center">
                    <a href="signin.html">Back To Log-in</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--jQuery Links-->
<script src="{{asset('assets/frontend/')}}/js/jquery-1.12.4.min.js"></script>
<!--Plugin Links -->
<!--BS Links -->
<script src="{{asset('assets/frontend/')}}/js/popper.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/script.js"></script>
</body>
</html>
