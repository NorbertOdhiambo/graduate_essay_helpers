<?php
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
?>
    <!-- <div id="subcontact">
        <button class='btn-outline btn-xl js-scroll-trigger' name="proceed">Proceed to Payment</button>
    </div> -->

    <script type="text/javascript">
        //callback handler for form submit
        $("#loginprocess").submit(function(e) {
            // prevent default submit behaviour 
            e.preventDefault();
            // serialize total form data
            var postData = $(this).serializeArray();

            // get form action url
            var formActionURL = $(this).attr("action");
            $("#submit").val('please wait...');
            // JQuery ajax method , for post we can directly use $.post({}); this is shortcut method for sending post request 
            $.ajax({
                url: formActionURL,
                type: "POST",
                data: postData,
            }).done(function(data) {
                $("#subcontact").html("<button class='btn-outline btn-xl js-scroll-trigger'>Proceed to Payment</button>");
                $('#signlogin').hide();
            }).fail(function() {
                $('#loginerror').modal('show');
            }).always(function() {
                $("#submit").val('submit');
            });
        });
    </script>


    <script type="text/javascript">
        //callback handler for form submit
        $("#contactForm").submit(function(e) {
            // prevent default submit behaviour 
            e.preventDefault();
            // serialize total form data
            var postData = $(this).serializeArray();

            // get form action url
            var formActionURL = $(this).attr("action");
            $("#submit").val('please wait...');
            // JQuery ajax method , for post we can directly use $.post({}); this is shortcut method for sending post request 
            $.ajax({
                url: formActionURL,
                type: "POST",
                data: postData,
            }).done(function(data) {
                $("#subcontact").html("<button class='btn-outline btn-xl js-scroll-trigger'>Proceed to Payment</button>");
                $('#signlogin').hide();
            }).fail(function() {
                alert("You are registered, log in instead");
            }).always(function() {
                $("#submit").val('submit');
            });
        });
    </script>
<?php
} else {


?>
    <div id="signlogin">
        <div class="rc-orderform__step-flag">
            <h6> 3. Sign up/Login</h6>
        </div>
        <hr />

        <ul class="nav nav-tabs text-center row" id="myTab" role="tablist">
            <li class="nav-item ops-sm-4">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign Up</a>
            </li>
            <li class="nav-item ops-sm-4">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <?php
                include('.././admin/conn.php');
                // session_start();

                if (isset($_POST['continue'])) {
                    // receive all input values from the form
                    // $username = mysqli_real_escape_string($db, $_POST['username']);
                    $email = mysqli_real_escape_string($con, $_POST['client_email']);
                    $password = mysqli_real_escape_string($con, $_POST['user_pass']);
                    // $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

                    // form validation: ensure that the form is correctly filled ...
                    // by adding (array_push()) corresponding error unto $errors array
                    // if (empty($username)) {
                    //     array_push($errors, "Username is required");
                    // }
                    if (empty($email)) {
                        array_push($errors, "Email is required");
                    }
                    if (empty($password)) {
                        array_push($errors, "Password is required");
                    }
                    // if ($password_1 != $password_2) {
                    //     array_push($errors, "The two passwords do not match");
                    // }

                    // first check the database to make sure 
                    // a user does not already exist with the same username and/or email
                    $user_check_query = "SELECT * FROM tbl_users WHERE email='$email' LIMIT 1";
                    $result = mysqli_query($con, $user_check_query);
                    $user = mysqli_fetch_assoc($result);

                    if ($user) { // if user exists
                        // if ($user['username'] === $username) {
                        //     array_push($errors, "Username already exists");
                        // }

                        if ($user['email'] === $email) {
                            array_push($errors, "email already exists");
                        }
                    }

                    // Finally, register user if there are no errors in the form
                    if (count($errors) == 0) {
                        // $password_enc = md5($password); //encrypt the password before saving in the database

                        $query = "INSERT INTO tbl_users (email, pwd) 
                              VALUES('$email', '$password')";
                        mysqli_query($con, $query);
                        $_SESSION['email'] = $email;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: ../order.php');
                    }
                }

                ?>

                <form role="form" id="contactForm" action="" method="POST">
                    <?php include "./errors.php" ?>
                    <div class="ops-form-group row">
                        <label for="exampleInputEmail1" class="ops-sm-2 col-form-label text-muted">Email address</label>
                        <div class="ops-sm-6">
                            <input type="email" class="form-control" placeholder="your email" id="exampleInputEmail1" aria-describedby="emailHelp" name="client_email" required>
                        </div>
                    </div>

                    <div class="ops-form-group row">
                        <label for="inputPassword3" class="ops-sm-2 col-form-label text-muted">Password</label>
                        <div class="ops-sm-6">
                            <input type="password" name="user_pass" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>


                    <div class="ops-form-group row">
                        <label for="inputPassword3" class="ops-sm-2 col-form-label text-muted">Phone</label>
                        <div class="ops-sm-7">
                            <div class="">


                                <select name="client_country" class="form-control ops-sm-4 custom-select border-default" id="exampleSelect2">
                                    <option value="United States#1"> United States +1</option>
                                    <option value="AFGHANISTAN#93">Afghanistan +93</option>
                                    <option value="ALBANIA#355">Albania +355</option>
                                    <option value="ALGERIA#213">Algeria +213</option>
                                    <option value="AMERICAN SAMOA#1684">American samoa +1684</option>
                                    <option value="ANDORRA#376">Andorra +376</option>
                                    <option value="ANGOLA#244">Angola +244</option>
                                    <option value="ANGUILLA#1264">Anguilla +1264</option>
                                    <option value="ANTARCTICA#0">Antarctica +0</option>
                                    <option value="ANTIGUA AND BARBUDA#1268">Antigua and barbuda +1268</option>
                                    <option value="ARGENTINA#54">Argentina +54</option>
                                    <option value="ARMENIA#374">Armenia +374</option>
                                    <option value="ARUBA#297">Aruba +297</option>
                                    <option value="AUSTRALIA#61">Australia +61</option>
                                    <option value="AUSTRIA#43">Austria +43</option>
                                    <option value="AZERBAIJAN#994">Azerbaijan +994</option>
                                    <option value="BAHAMAS#1242">Bahamas +1242</option>
                                    <option value="BAHRAIN#973">Bahrain +973</option>
                                    <option value="BANGLADESH#880">Bangladesh +880</option>
                                    <option value="BARBADOS#1246">Barbados +1246</option>
                                    <option value="BELARUS#375">Belarus +375</option>
                                    <option value="BELGIUM#32">Belgium +32</option>
                                    <option value="BELIZE#501">Belize +501</option>
                                    <option value="BENIN#229">Benin +229</option>
                                    <option value="BERMUDA#1441">Bermuda +1441</option>
                                    <option value="BHUTAN#975">Bhutan +975</option>
                                    <option value="BOLIVIA#591">Bolivia +591</option>
                                    <option value="BOSNIA AND HERZEGOVINA#387">Bosnia and herzegovina +387</option>
                                    <option value="BOTSWANA#267">Botswana +267</option>
                                    <option value="BOUVET ISLAND#0">Bouvet island +0</option>
                                    <option value="BRAZIL#55">Brazil +55</option>
                                    <option value="BRITISH INDIAN OCEAN TERRITORY#246">British indian ocean territory +246</option>
                                    <option value="BRUNEI DARUSSALAM#673">Brunei darussalam +673</option>
                                    <option value="BULGARIA#359">Bulgaria +359</option>
                                    <option value="BURKINA FASO#226">Burkina faso +226</option>
                                    <option value="BURUNDI#257">Burundi +257</option>
                                    <option value="CAMBODIA#855">Cambodia +855</option>
                                    <option value="CAMEROON#237">Cameroon +237</option>
                                    <option value="CANADA#1">Canada +1</option>
                                    <option value="CAPE VERDE#238">Cape verde +238</option>
                                    <option value="CAYMAN ISLANDS#1345">Cayman islands +1345</option>
                                    <option value="CENTRAL AFRICAN REPUBLIC#236">Central african republic +236</option>
                                    <option value="CHAD#235">Chad +235</option>
                                    <option value="CHILE#56">Chile +56</option>
                                    <option value="CHINA#86">China +86</option>
                                    <option value="CHRISTMAS ISLAND#61">Christmas island +61</option>
                                    <option value="COCOS (KEELING) ISLANDS#672">Cocos (keeling) islands +672</option>
                                    <option value="COLOMBIA#57">Colombia +57</option>
                                    <option value="COMOROS#269">Comoros +269</option>
                                    <option value="CONGO#242">Congo +242</option>
                                    <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE#242">Congo, the democratic republic of the +242</option>
                                    <option value="COOK ISLANDS#682">Cook islands +682</option>
                                    <option value="COSTA RICA#506">Costa rica +506</option>
                                    <option value="COTE D'IVOIRE#225">Cote d'ivoire +225</option>
                                    <option value="CROATIA#385">Croatia +385</option>
                                    <option value="CUBA#53">Cuba +53</option>
                                    <option value="CYPRUS#357">Cyprus +357</option>
                                    <option value="CZECH REPUBLIC#420">Czech republic +420</option>
                                    <option value="DENMARK#45">Denmark +45</option>
                                    <option value="DJIBOUTI#253">Djibouti +253</option>
                                    <option value="DOMINICA#1767">Dominica +1767</option>
                                    <option value="DOMINICAN REPUBLIC#1809">Dominican republic +1809</option>
                                    <option value="ECUADOR#593">Ecuador +593</option>
                                    <option value="EGYPT#20">Egypt +20</option>
                                    <option value="EL SALVADOR#503">El salvador +503</option>
                                    <option value="EQUATORIAL GUINEA#240">Equatorial guinea +240</option>
                                    <option value="ERITREA#291">Eritrea +291</option>
                                    <option value="ESTONIA#372">Estonia +372</option>
                                    <option value="ETHIOPIA#251">Ethiopia +251</option>
                                    <option value="FALKLAND ISLANDS (MALVINAS)#500">Falkland islands (malvinas) +500</option>
                                    <option value="FAROE ISLANDS#298">Faroe islands +298</option>
                                    <option value="FIJI#679">Fiji +679</option>
                                    <option value="FINLAND#358">Finland +358</option>
                                    <option value="FRANCE#33">France +33</option>
                                    <option value="FRENCH GUIANA#594">French guiana +594</option>
                                    <option value="FRENCH POLYNESIA#689">French polynesia +689</option>
                                    <option value="FRENCH SOUTHERN TERRITORIES#0">French southern territories +0</option>
                                    <option value="GABON#241">Gabon +241</option>
                                    <option value="GAMBIA#220">Gambia +220</option>
                                    <option value="GEORGIA#995">Georgia +995</option>
                                    <option value="GERMANY#49">Germany +49</option>
                                    <option value="GHANA#233">Ghana +233</option>
                                    <option value="GIBRALTAR#350">Gibraltar +350</option>
                                    <option value="GREECE#30">Greece +30</option>
                                    <option value="GREENLAND#299">Greenland +299</option>
                                    <option value="GRENADA#1473">Grenada +1473</option>
                                    <option value="GUADELOUPE#590">Guadeloupe +590</option>
                                    <option value="GUAM#1671">Guam +1671</option>
                                    <option value="GUATEMALA#502">Guatemala +502</option>
                                    <option value="GUINEA#224">Guinea +224</option>
                                    <option value="GUINEA-BISSAU#245">Guinea-bissau +245</option>
                                    <option value="GUYANA#592">Guyana +592</option>
                                    <option value="HAITI#509">Haiti +509</option>
                                    <option value="HEARD ISLAND AND MCDONALD ISLANDS#0">Heard island and mcdonald islands +0</option>
                                    <option value="HOLY SEE (VATICAN CITY STATE)#39">Holy see (vatican city state) +39</option>
                                    <option value="HONDURAS#504">Honduras +504</option>
                                    <option value="HONG KONG#852">Hong kong +852</option>
                                    <option value="HUNGARY#36">Hungary +36</option>
                                    <option value="ICELAND#354">Iceland +354</option>
                                    <option value="INDIA#91">India +91</option>
                                    <option value="INDONESIA#62">Indonesia +62</option>
                                    <option value="IRAN, ISLAMIC REPUBLIC OF#98">Iran, islamic republic of +98</option>
                                    <option value="IRAQ#964">Iraq +964</option>
                                    <option value="IRELAND#353">Ireland +353</option>
                                    <option value="ISRAEL#972">Israel +972</option>
                                    <option value="ITALY#39">Italy +39</option>
                                    <option value="JAMAICA#1876">Jamaica +1876</option>
                                    <option value="JAPAN#81">Japan +81</option>
                                    <option value="JORDAN#962">Jordan +962</option>
                                    <option value="KAZAKHSTAN#7">Kazakhstan +7</option>
                                    <option value="KENYA#254">Kenya +254</option>
                                    <option value="KIRIBATI#686">Kiribati +686</option>
                                    <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF#850">Korea, democratic people's republic of +850</option>
                                    <option value="KOREA, REPUBLIC OF#82">Korea, republic of +82</option>
                                    <option value="KUWAIT#965">Kuwait +965</option>
                                    <option value="KYRGYZSTAN#996">Kyrgyzstan +996</option>
                                    <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC#856">Lao people's democratic republic +856</option>
                                    <option value="LATVIA#371">Latvia +371</option>
                                    <option value="LEBANON#961">Lebanon +961</option>
                                    <option value="LESOTHO#266">Lesotho +266</option>
                                    <option value="LIBERIA#231">Liberia +231</option>
                                    <option value="LIBYAN ARAB JAMAHIRIYA#218">Libyan arab jamahiriya +218</option>
                                    <option value="LIECHTENSTEIN#423">Liechtenstein +423</option>
                                    <option value="LITHUANIA#370">Lithuania +370</option>
                                    <option value="LUXEMBOURG#352">Luxembourg +352</option>
                                    <option value="MACAO#853">Macao +853</option>
                                    <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF#389">Macedonia, the former yugoslav republic of +389</option>
                                    <option value="MADAGASCAR#261">Madagascar +261</option>
                                    <option value="MALAWI#265">Malawi +265</option>
                                    <option value="MALAYSIA#60">Malaysia +60</option>
                                    <option value="MALDIVES#960">Maldives +960</option>
                                    <option value="MALI#223">Mali +223</option>
                                    <option value="MALTA#356">Malta +356</option>
                                    <option value="MARSHALL ISLANDS#692">Marshall islands +692</option>
                                    <option value="MARTINIQUE#596">Martinique +596</option>
                                    <option value="MAURITANIA#222">Mauritania +222</option>
                                    <option value="MAURITIUS#230">Mauritius +230</option>
                                    <option value="MAYOTTE#269">Mayotte +269</option>
                                    <option value="MEXICO#52">Mexico +52</option>
                                    <option value="MICRONESIA, FEDERATED STATES OF#691">Micronesia, federated states of +691</option>
                                    <option value="MOLDOVA, REPUBLIC OF#373">Moldova, republic of +373</option>
                                    <option value="MONACO#377">Monaco +377</option>
                                    <option value="MONGOLIA#976">Mongolia +976</option>
                                    <option value="MONTSERRAT#1664">Montserrat +1664</option>
                                    <option value="MOROCCO#212">Morocco +212</option>
                                    <option value="MOZAMBIQUE#258">Mozambique +258</option>
                                    <option value="MYANMAR#95">Myanmar +95</option>
                                    <option value="NAMIBIA#264">Namibia +264</option>
                                    <option value="NAURU#674">Nauru +674</option>
                                    <option value="NEPAL#977">Nepal +977</option>
                                    <option value="NETHERLANDS#31">Netherlands +31</option>
                                    <option value="NETHERLANDS ANTILLES#599">Netherlands antilles +599</option>
                                    <option value="NEW CALEDONIA#687">New caledonia +687</option>
                                    <option value="NEW ZEALAND#64">New zealand +64</option>
                                    <option value="NICARAGUA#505">Nicaragua +505</option>
                                    <option value="NIGER#227">Niger +227</option>
                                    <option value="NIGERIA#234">Nigeria +234</option>
                                    <option value="NIUE#683">Niue +683</option>
                                    <option value="NORFOLK ISLAND#672">Norfolk island +672</option>
                                    <option value="NORTHERN MARIANA ISLANDS#1670">Northern mariana islands +1670</option>
                                    <option value="NORWAY#47">Norway +47</option>
                                    <option value="OMAN#968">Oman +968</option>
                                    <option value="PAKISTAN#92">Pakistan +92</option>
                                    <option value="PALAU#680">Palau +680</option>
                                    <option value="PALESTINIAN TERRITORY, OCCUPIED#970">Palestinian territory, occupied +970</option>
                                    <option value="PANAMA#507">Panama +507</option>
                                    <option value="PAPUA NEW GUINEA#675">Papua new guinea +675</option>
                                    <option value="PARAGUAY#595">Paraguay +595</option>
                                    <option value="PERU#51">Peru +51</option>
                                    <option value="PHILIPPINES#63">Philippines +63</option>
                                    <option value="PITCAIRN#0">Pitcairn +0</option>
                                    <option value="POLAND#48">Poland +48</option>
                                    <option value="PORTUGAL#351">Portugal +351</option>
                                    <option value="PUERTO RICO#1787">Puerto rico +1787</option>
                                    <option value="QATAR#974">Qatar +974</option>
                                    <option value="REUNION#262">Reunion +262</option>
                                    <option value="ROMANIA#40">Romania +40</option>
                                    <option value="RUSSIAN FEDERATION#70">Russian federation +70</option>
                                    <option value="RWANDA#250">Rwanda +250</option>
                                    <option value="SAINT HELENA#290">Saint helena +290</option>
                                    <option value="SAINT KITTS AND NEVIS#1869">Saint kitts and nevis +1869</option>
                                    <option value="SAINT LUCIA#1758">Saint lucia +1758</option>
                                    <option value="SAINT PIERRE AND MIQUELON#508">Saint pierre and miquelon +508</option>
                                    <option value="SAINT VINCENT AND THE GRENADINES#1784">Saint vincent and the grenadines +1784</option>
                                    <option value="SAMOA#684">Samoa +684</option>
                                    <option value="SAN MARINO#378">San marino +378</option>
                                    <option value="SAO TOME AND PRINCIPE#239">Sao tome and principe +239</option>
                                    <option value="SAUDI ARABIA#966">Saudi arabia +966</option>
                                    <option value="SENEGAL#221">Senegal +221</option>
                                    <option value="SERBIA AND MONTENEGRO#381">Serbia and montenegro +381</option>
                                    <option value="SEYCHELLES#248">Seychelles +248</option>
                                    <option value="SIERRA LEONE#232">Sierra leone +232</option>
                                    <option value="SINGAPORE#65">Singapore +65</option>
                                    <option value="SLOVAKIA#421">Slovakia +421</option>
                                    <option value="SLOVENIA#386">Slovenia +386</option>
                                    <option value="SOLOMON ISLANDS#677">Solomon islands +677</option>
                                    <option value="SOMALIA#252">Somalia +252</option>
                                    <option value="SOUTH AFRICA#27">South africa +27</option>
                                    <option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS#0">South georgia and the south sandwich islands +0</option>
                                    <option value="SPAIN#34">Spain +34</option>
                                    <option value="SRI LANKA#94">Sri lanka +94</option>
                                    <option value="SUDAN#249">Sudan +249</option>
                                    <option value="SURINAME#597">Suriname +597</option>
                                    <option value="SVALBARD AND JAN MAYEN#47">Svalbard and jan mayen +47</option>
                                    <option value="SWAZILAND#268">Swaziland +268</option>
                                    <option value="SWEDEN#46">Sweden +46</option>
                                    <option value="SWITZERLAND#41">Switzerland +41</option>
                                    <option value="SYRIAN ARAB REPUBLIC#963">Syrian arab republic +963</option>
                                    <option value="TAIWAN, PROVINCE OF CHINA#886">Taiwan, province of china +886</option>
                                    <option value="TAJIKISTAN#992">Tajikistan +992</option>
                                    <option value="TANZANIA, UNITED REPUBLIC OF#255">Tanzania, united republic of +255</option>
                                    <option value="THAILAND#66">Thailand +66</option>
                                    <option value="TIMOR-LESTE#670">Timor-leste +670</option>
                                    <option value="TOGO#228">Togo +228</option>
                                    <option value="TOKELAU#690">Tokelau +690</option>
                                    <option value="TONGA#676">Tonga +676</option>
                                    <option value="TRINIDAD AND TOBAGO#1868">Trinidad and tobago +1868</option>
                                    <option value="TUNISIA#216">Tunisia +216</option>
                                    <option value="TURKEY#90">Turkey +90</option>
                                    <option value="TURKMENISTAN#7370">Turkmenistan +7370</option>
                                    <option value="TURKS AND CAICOS ISLANDS#1649">Turks and caicos islands +1649</option>
                                    <option value="TUVALU#688">Tuvalu +688</option>
                                    <option value="UGANDA#256">Uganda +256</option>
                                    <option value="UKRAINE#380">Ukraine +380</option>
                                    <option value="UNITED ARAB EMIRATES#971">United arab emirates +971</option>
                                    <option value="UNITED KINGDOM#44">United kingdom +44</option>
                                    <option value="UNITED STATES#1">United states +1</option>
                                    <option value="UNITED STATES MINOR OUTLYING ISLANDS#1">United states minor outlying islands +1</option>
                                    <option value="URUGUAY#598">Uruguay +598</option>
                                    <option value="UZBEKISTAN#998">Uzbekistan +998</option>
                                    <option value="VANUATU#678">Vanuatu +678</option>
                                    <option value="VENEZUELA#58">Venezuela +58</option>
                                    <option value="VIET NAM#84">Viet nam +84</option>
                                    <option value="VIRGIN ISLANDS, BRITISH#1284">Virgin islands, british +1284</option>
                                    <option value="VIRGIN ISLANDS, U.S.#1340">Virgin islands, u.s. +1340</option>
                                    <option value="WALLIS AND FUTUNA#681">Wallis and futuna +681</option>
                                    <option value="WESTERN SAHARA#212">Western sahara +212</option>
                                    <option value="YEMEN#967">Yemen +967</option>
                                    <option value="ZAMBIA#260">Zambia +260</option>
                                    <option value="ZIMBABWE#263">Zimbabwe +263</option>
                                </select>

                                <input type="input" name="client_phone" class="ops-sm-6 form-control" id="inputPassword3" placeholder="Phone (optional)">
                            </div>
                        </div>
                    </div>

                    <div class="ops-form-group row">
                        <label for="inputPassword3" class="ops-sm-3 col-form-label text-muted"></label>
                        <div class="ops-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" required checked>
                                <label class="form-check-label text-left" for="defaultCheck1">
                                    I agree to the Terms and conditions
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="ops-sm-6 mx-auto">
                        <button type="submit" name="continue" class="btn ops-sm-6 btn-warning">Continue</button>
                    </div>
                </form>

            </div>

            <?php
            include('.././admin/conn.php');
            // session_start();

            if (isset($_POST['submit'])) {
                //extract($_POST);
                $email = mysqli_real_escape_string($con, $_POST['client_email']);
                $password = mysqli_real_escape_string($con, $_POST['client_pass']);
                $check = mysqli_query($con, "select * from tbl_users where email='$email' and pwd='$password'");
                $check_fetch = mysqli_fetch_array($check);

                if ($check_fetch['id'] != '') {
                    $_SESSION['id'] = $check_fetch['id'];

                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $id;

                    header('location:../order.php');
                }
            }
            ?>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <form role="form" id="loginprocess" action="" method="POST" onSubmit="window.location.reload()">
                    <div class="ops-form-group row">
                        <label for="inputEmail3" class="ops-sm-2 col-form-label text-muted">Email</label>
                        <div class="ops-sm-6">
                            <input type="email" name="client_email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="ops-form-group row">
                        <label for="inputPassword3" class="ops-sm-2 col-form-label text-muted">Password</label>
                        <div class="ops-sm-6">
                            <input type="password" name="client_pass" class="form-control" id="inputPassword3" placeholder="Password" required>
                            <small><a href="./user/reset-password.php">Forgot Password</a></small>
                        </div>
                    </div>
                    <div class="ops-form-group row">
                        <div class="ops-sm-6 mx-auto">
                            <button type="submit" name="submit" class="btn ops-sm-6 btn-warning">Sign in</button>
                        </div>
                    </div>
                </form>
                <?php echo $_SESSION['email']; ?>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginerror" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ooops! Something Wrong</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Appears your login or password is wrong </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Try Again</button>
                </div>
            </div>
        </div>
    </div>


<?php } ?>


<!-- <script type="text/javascript">
    //callback handler for form submit
    $("#loginprocess").submit(function(e) {
        // prevent default submit behaviour 
        e.preventDefault();
        // serialize total form data
        var postData = $(this).serializeArray();

        // get form action url
        var formActionURL = $(this).attr("action");
        $("#submit").val('please wait...');
        // JQuery ajax method , for post we can directly use $.post({}); this is shortcut method for sending post request 
        $.ajax({
            url: formActionURL,
            type: "POST",
            data: postData,
        }).done(function(data) {
            $("#subcontact").html("<button class='btn-outline btn-xl js-scroll-trigger'>Proceed to Payment</button>");
            $('#signlogin').hide();
        }).fail(function() {
            $('#loginerror').modal('show');
        }).always(function() {
            $("#submit").val('submit');
        });
    });
</script>


<script type="text/javascript">
    //callback handler for form submit
    $("#contactForm").submit(function(e) {
        // prevent default submit behaviour 
        e.preventDefault();
        // serialize total form data
        var postData = $(this).serializeArray();

        // get form action url
        var formActionURL = $(this).attr("action");
        $("#submit").val('please wait...');
        // JQuery ajax method , for post we can directly use $.post({}); this is shortcut method for sending post request 
        $.ajax({
            url: formActionURL,
            type: "POST",
            data: postData,
        }).done(function(data) {
            $("#subcontact").html("<button class='btn-outline btn-xl js-scroll-trigger'>Proceed to Payment</button>");
            $('#signlogin').hide();
        }).fail(function() {
            alert("You are registered, log in instead");
        }).always(function() {
            $("#submit").val('submit');
        });
    });
</script> -->