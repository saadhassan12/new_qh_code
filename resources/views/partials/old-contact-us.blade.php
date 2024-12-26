@extends('layout.master')
@section('content')
    <section class="contact" id="contact">
        <div class="container-fluid p-0">
            <div class="row max-width mx-auto align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="container-fluid p-0">
                        <div class="content-wrapper">
                            <div class="contact-page">
                                <div class="container m-t-xl m-b-xl">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="contact-page-bg bg-white"></div>

                                            <div class="contact-page-content wrapper font-md">
                                                <h5 class="text-red"><strong>If you are a Customer or a
                                                        Consumer</strong></h5>

                                                <div class="m-t-lg">
                                                    +36 70 438 6399 <br>+36 1 447 6399<br>
                                                    Monday - Friday<br>
                                                    9:00 a.m. to 5:00 p.m. CET <br>
                                                    <strong>
                                                        <a href="#contact" data-component="Frontend/Anchor">Send your
                                                            email here</a>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="contact-page-bg bg-white"></div>

                                            <div class="contact-page-content wrapper font-md">
                                                <h5 class="text-red"><strong>If you are a member of Media</strong></h5>

                                                <div class="m-t-lg">
                                                    Tamás Mehlhoffer<br>
                                                    Head of Communications in Hungary<br>
                                                    E-mail: tamas.mehlhoffer (at) tungsram.com
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="contact-page-bg bg-white"></div>

                                            <div class="contact-page-content wrapper font-md">
                                                <h5 class="text-red"><strong>Our Headquarters are located</strong></h5>

                                                <div class="m-t-lg">
                                                    77. Váci street<br>
                                                    Budapest, 1044<br>
                                                    Hungary, Tungsram Operations Kft.<br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block max-width-50">
                                        <a name="contact"></a>

                                        <h3 class="text-blue text-center m-b-xl">
                                            <strong>
                                                Get in touch </strong>
                                        </h3>


                                        <div class="row clearfix m-t-xl">
                                            <form action="" class="mt-medium">
                                                <div class="form-element">
                                                    <div class="form-group text-left row check-wrap">
                                                        <div class="col-md-6 col-xs-12 checkOption">
                                                            <input type="radio" id="person" name="userType[]"
                                                                   value="person" class="hidden" autocomplete="off"
                                                                   placeholder=""> <label for="person"
                                                                                          class="person-label text-center">Person</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-12 checkOption">
                                                            <input type="radio" id="enterprise" name="userType[]"
                                                                   value="enterprise" class="hidden" autocomplete="off"
                                                                   placeholder=""> <label for="enterprise"
                                                                                          class="enterprise-label text-center">Enterprise</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-element m-t-xxl">
                                                    <div class="form-group text-left">
                                                        <label>First name</label>
                                                        <input type="text" name="firstName" class="form-control"
                                                               autocomplete="off" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <label>Last name</label>
                                                        <input type="text" name="lastName" class="form-control"
                                                               autocomplete="off" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <label>Position</label>
                                                        <input type="text" name="position" class="form-control"
                                                               autocomplete="off" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <label>E-mail address</label>
                                                        <input type="email" name="email" class="form-control"
                                                               autocomplete="off" placeholder="">
                                                    </div>
                                                </div>


                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" class="form-control"
                                                               autocomplete="off" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left select">
                                                        <label>Country</label>
                                                        <select name="countryName" class="form-control"
                                                                autocomplete="off" placeholder="">
                                                            <option value="">Select your country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
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
                                                            <option value="Bosnia and Herzegovina">Bosnia and
                                                                Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British
                                                                Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Caribbean Netherlands ">Caribbean Netherlands
                                                            </option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, Democratic Republic of">Congo,
                                                                Democratic Republic of</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaçao">Curaçao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic
                                                            </option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern
                                                                Territories</option>
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
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard and McDonald Islands">Heard and
                                                                McDonald Islands</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran</option>
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
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao
                                                                People's Democratic Republic
                                                            </option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Ĺland Islands">Ĺland Islands</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
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
                                                            <option value="Micronesia, Federated States of">Micronesia,
                                                                Federated States of</option>
                                                            <option value="Moldova">Moldova</option>
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
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="North Korea">North Korea</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana
                                                                Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestine, State of">Palestine, State of
                                                            </option>
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
                                                            <option value="Réunion">Réunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation
                                                            </option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Barthélemy">Saint Barthélemy</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint
                                                                Vincent and the Grenadines
                                                            </option>
                                                            <option value="Saint-Martin (France)">Saint-Martin (France)
                                                            </option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Sint Maarten (Dutch part)">Sint Maarten
                                                                (Dutch part)</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option
                                                                value="South Georgia and the South Sandwich Islands">
                                                                South Georgia and the South
                                                                Sandwich Islands</option>
                                                            <option value="South Korea">South Korea</option>
                                                            <option value="South Sudan">South Sudan</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="St. Pierre and Miquelon">St. Pierre and
                                                                Miquelon</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and
                                                                Jan Mayen Islands</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="The Netherlands">The Netherlands</option>
                                                            <option value="Timor-Leste">Timor-Leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United
                                                                States Minor Outlying
                                                                Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican">Vatican</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (British)">Virgin Islands
                                                                (British)</option>
                                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)
                                                            </option>
                                                            <option value="Wallis and Futuna Islands">Wallis and Futuna
                                                                Islands</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <label>Company name</label>
                                                        <input type="text" name="companyName" class="form-control"
                                                               autocomplete="off" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left select">
                                                        <label>Number of employees</label>
                                                        <select name="numberOfEmployees" class="form-control"
                                                                autocomplete="off" placeholder="">
                                                            <option value="">Select the number of your employees
                                                            </option>
                                                            <option value="1-5">1-5</option>
                                                            <option value="6-19">6-19</option>
                                                            <option value="20-99">20-99</option>
                                                            <option value="100-349">100-349</option>
                                                            <option value="350-1499">350-1499</option>
                                                            <option value="1500+">1500+</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left select">
                                                        <label>Business type</label>
                                                        <select name="businessType" class="form-select form-control"
                                                                autocomplete="off" placeholder="">
                                                            <option value="">Select your business type</option>
                                                            <option value="Wholesale">Wholesale</option>
                                                            <option value="Project opportunity">Project opportunity
                                                            </option>
                                                            <option value="Automotive">Automotive</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <label>Your message</label>
                                                        <textarea name="message" class="form-control" rows="5"
                                                                  autocomplete="off" placeholder=""></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <input type="checkbox" id="newsLetter" name="newsLetter"
                                                               value="1" class="newsletter hidden" autocomplete="off"
                                                               placeholder=""> <label for="newsLetter"
                                                                                      class="newsLetter-label">Subscribe to Newsletter</label>
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <input type="checkbox" id="acceptance" name="acceptance"
                                                               value="1" class="hidden" autocomplete="off" placeholder="">
                                                        <label for="acceptance" class="acceptance-label">I
                                                            have read and agree to the Privacy Policy</label>
                                                    </div>
                                                </div>



                                                <div class="form-element">
                                                    <div class="form-group text-left">
                                                        <input class="hidden-visitor-element" type="hidden"
                                                               name="visitor_id">
                                                    </div>
                                                </div>

                                                <div class="form-element">
                                                    <div class="form-group text-center">
                                                        <button class="btn btn-blue"
                                                                style="margin-top: 8px; float:left;">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
