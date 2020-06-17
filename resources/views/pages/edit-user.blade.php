@extends('layouts.user')
@section('content')
    <div class="card" style="margin-top: 0px;margin-left: 25px;margin-right: 25px; padding-bottom: 50px;">

        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-10"><h1>User name</h1></div>
            </div>
            <div class="row">
                <div class="col-sm-3"><!--left col-->


                    <div class="text-center">
                        <img src="{{asset('images/profile-picture.jpg')}}" class="avatar img-circle img-thumbnail" alt="avatar">
                        <h6>Upload a different photo...</h6>
                        <input type="file" class="text-center center-block file-upload">
                    </div>
                    <hr>
                    <br>


                </div><!--/col-3-->
                <div class="col-sm-9">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Basic info</a></li>
                        <li><a data-toggle="tab" href="#details">More Details</a></li>
                        <li><a data-toggle="tab" href="#education">Education</a></li>
                        <li><a data-toggle="tab" href="#work">Work</a></li>

                    </ul>

                    <form class="form" action="#" method="post" id="registrationForm">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name"><h4>First name</h4></label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="{{Auth::guard('user')->user()->firstName}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Last name</h4></label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any." value="{{Auth::guard('user')->user()->lastName}}">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone"><h4>Phone</h4></label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any." value="{{Auth::guard('user')->user()->UserDetails['phone'] ?? ''}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile"><h4>Mobile</h4></label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="{{Auth::guard('user')->user()->UserDetails['mobile'] ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="{{Auth::guard('user')->user()->email ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Country</h4></label>
                                        <select class="form-control form-control-sm" name="country">
                                            <option value="{{Auth::guard('user')->user()->UserDetails['country'] ?? ''}}" selected="selected" >{{Auth::guard('user')->user()->UserDetails['country'] ?? ''}}</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
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
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
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
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
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
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
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
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
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
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>

                                    </div>
                                </div>



                            <hr>

                        </div><!--/tab-pane-->
                        <div class="tab-pane" id="details">

                            <h2></h2>

                            <hr>


                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="birthdate"><h4>Birth Date</h4></label>
                                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{Auth::guard('user')->user()->birthDate ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Gender</h4></label>


                                    </div>
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Male</h4></label>
                                        <input type="radio" class="form-check-input" name="male" id="male" {{ ! empty(Auth::guard('user')->user()->UserDetails['gender']) ? Auth::guard('user')->user()->UserDetails['gender'] == 'male' ? 'checked': '' : ''}}>
                                        <label for="last_name"><h4>Female</h4></label>
                                        <input type="radio" class="form-check-input" name="female" id="female" {{ ! empty(Auth::guard('user')->user()->UserDetails['gender']) ? Auth::guard('user')->user()->UserDetails['gender'] == 'female' ? 'checked': '' : ''}} >

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6" style="margin-bottom: 20px">
                                        <label for="phone"><h4>Nationality</h4></label>
                                        <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nationality" title="enter your nationality." value="{{Auth::guard('user')->user()->UserDetails['nationality'] ?? ''}}">
                                    </div>
                                </div>

                                <div class="form-group" >
                                    <div class="col-xs-6" style="margin-bottom: 20px">
                                        <label for="mobile"><h4>Relationship status</h4></label>
                                        <input type="text" class="form-control" name="relation" id="relation" placeholder="enter relationship status" title="enter your relationship status." value="{{Auth::guard('user')->user()->UserDetails['relationship-status'] ?? ''}}">
                                    </div>
                                </div>
                            <hr style="border: 1px solid #808080; border-radius: 5px;">
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Website</h4></label>
                                        <input type="text" class="form-control" name="website" id="website" placeholder="example.com" title="enter your website." value="{{Auth::guard('user')->user()->UserDetails['website'] ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Facebook</h4></label>
                                        <input type="text" class="form-control" id="location" placeholder="facebook" title="enter a location" name="fb" value="{{Auth::guard('user')->user()->UserDetails['fb'] ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password"><h4>Twitter</h4></label>
                                        <input type="text" class="form-control" name="tw" id="password" placeholder="twitter" title="enter your twitter username." value="{{Auth::guard('user')->user()->UserDetails['twitter'] ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password2"><h4>Instagram</h4></label>
                                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="instagram" title="enter your instagram username." value="{{Auth::guard('user')->user()->UserDetails['instagram'] ?? ''}}">
                                    </div>
                                </div>


                        </div><!--/tab-pane-->

                        <div class="tab-pane" id="education">

                            <h2></h2>

                            <hr>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Education</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="{{Auth::guard('user')->user()->UserDetails['education'] ?? ''}}">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name"><h4>.</h4></label>


                                </div>
                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Current</h4></label>
                                    <input type="checkbox" class="form-check-input" name="current-education" id="current-education" {{ ! empty(Auth::guard('user')->user()->UserDetails['gender']) ? Auth::guard('user')->user()->UserDetails['gender'] == 'male' ? 'checked': '' : ''}}>

                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Education Country</h4></label>
                                    <input type="text" class="form-control" name="education-country" id="education-country" placeholder="enter education country" title="enter your education country." value="{{Auth::guard('user')->user()->UserDetails['education-country'] ?? ''}}">
                                </div>
                            </div>


                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Highest Degree</h4></label>
                                    <input type="text" class="form-control" name="highest-degree" id="email" placeholder="your highest degree" title="enter the highest degree you reached." value="{{Auth::guard('user')->user()->UserDetails['highest-degree'] ?? ''}}">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Organization</h4></label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location" value="{{Auth::guard('user')->user()->UserDetails['education-university'] ?? ''}}">
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane" id="work">


                            <hr>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name">Work</label>
                                        <input type="text" class="form-control" name="work" id="work" placeholder="enter your job title" title="enter your first name if any." value="{{Auth::guard('user')->user()->UserDetails['work'] ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name"><h4></h4></label>


                                    </div>
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Current</h4></label>
                                        <input type="checkbox" class="form-check-input" name="current-work" id="current-work" {{ ! empty(Auth::guard('user')->user()->UserDetails['gender']) ? Auth::guard('user')->user()->UserDetails['gender'] == 'male' ? 'checked': '' : ''}}>

                                    </div>

                                </div>



                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile"><h4>Company</h4></label>
                                        <input type="text" class="form-control" name="company" id="mobile" placeholder="enter company name" title="enter your company name." value="{{Auth::guard('user')->user()->UserDetails['company'] ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Country</h4></label>
                                        <input type="text" class="form-control" name="work-country" id="email" placeholder="you working country" title="enter your work location." {{Auth::guard('user')->user()->UserDetails['work-country'] ?? ''}}>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                        <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                    </div>
                                </div>
                        </div>

                    </div><!--/tab-pane-->
                    </form>

                </div><!--/tab-content-->

            </div><!--/col-9-->

        </div><!--/row-->

    </div>

<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
</script>
@endsection
