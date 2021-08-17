<?php
require_once 'header.php';
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $db = DB::getInstance();
        $insert = $db->insert('feedback',array(
            'user_id' => Session::get(Config::get('session/session_name')),
            'subject' => Input::get('subject'),
            'message' => Input::get('message')
        ));

        Redirect::to('home.php');
    }
}
if (Session::exists('home')){
    echo '<p>' . Session::flash('home') . '</p>';
}
//echo Session::get(Config::get('session/session_name'));
$user = new User();

    if (!$user->isLoggedIn()){
        echo '<p>You need to <a href="index.php">LOGIN</a> in or <a href="register.php">REGISTER</a></p>';
    } else { 

echo $db['user_id'];

        echo '





<body class="alt-menu sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
   

  <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-text">
                            <img src="images/logo.png" style="font-size:25px; width: 71px;" class="navbar-logo" alt="logo">

                        <a href="index.html" class="nav-link"> 3xodus Proxies </a>
                    </li>
                </ul>




                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <li class="menu">
                        <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span> Dashboard</span>
                            </div>
                        </a>
                    </li>


      
                    <li class="menu">
                        <a href="pricing.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                <span> Pricing</span>
                            </div>
                            <div>
             
                            </div>
                        </a>
                    </li>


                                        <li class="menu">
                        <a href="api.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> API</span>
                            </div>
                            <div>
             
                            </div>
                        </a>
                    </li>



                                        <li class="menu">
                        <a href="faqs.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                         
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                <span> FAQs</span>
                            </div>
                            <div>
             
                            </div>
                        </a>
                    </li>




                                        <li class="menu">
                        <a href="logout.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                   
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span> Sign Out</span>
                            </div>
                            <div>
             
                            </div>
                        </a>
                    </li>


                    
                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->

 





        <div id="content" class="main-content">
            <div class="container">


                <div class="container">
           

<nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <img src="images/logo.png" style="font-size:25px; width: 71px;" class="navbar-logo" alt="logo">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span> Dashboard</span> </a>
      <li class="nav-item">
        <a class="nav-link" href="pricing.php">     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                <span> Pricing</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="api.php">              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> API</span></a>
      </li>


                       

      <li class="nav-item">
        <a class="nav-link" href="faqs.php"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                <span> FAQs</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="logout.php"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span> Sign Out</span>                           </a>
      </li>




    </ul>
  </div>
</nav>
         

                    <div id="basic" class="row layout-spacing layout-top-spacing">
                        <div class="col-lg-4">
                                          <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>TYPES OF PROXIES</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-content widget-content-area"> <h5> HTTPS </h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Transparant</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">anonymous</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Elite</label>
                                    </div>

</div>


                                <div class="widget-content widget-content-area"> <h5> HTTPS </h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customChe4k1">
                                        <label class="custom-control-label" for="customCheck4">SOCKS4</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">SOCKS5</label>
                                    </div></div>
                                                           <div class="widget-content widget-content-area"> <h5> ALL TYPES </h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck6">OTHER</label>
                                    </div>
                                </div>
                                                           <div class="widget-content widget-content-area"> <h5> COUNTRIES </h5>
<label class="new-control new-radio square-radio new-radio-text radio-primary">
<input type="radio" class="new-control-input" name="custom-radio-6">
                                    <select id="country" name="country">
      <option class="new-control-input" value="All">All</option>

   <option class="new-control-input" value="Afganistan">Afghanistan</option>
   <option class="new-control-input" value="Albania">Albania</option>
   <option class="new-control-input" value="Algeria">Algeria</option>
   <option class="new-control-input" value="American Samoa">American Samoa</option>
   <option class="new-control-input" value="Andorra">Andorra</option>
   <option class="new-control-input" value="Angola">Angola</option>
   <option class="new-control-input" value="Anguilla">Anguilla</option>
   <option class="new-control-input" value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option class="new-control-input" value="Argentina">Argentina</option>
   <option class="new-control-input" value="Armenia">Armenia</option>
   <option class="new-control-input" value="Aruba">Aruba</option>
   <option class="new-control-input" value="Australia">Australia</option>
   <option class="new-control-input" value="Austria">Austria</option>
   <option class="new-control-input" value="Azerbaijan">Azerbaijan</option>
   <option class="new-control-input" value="Bahamas">Bahamas</option>
   <option class="new-control-input" value="Bahrain">Bahrain</option>
   <option class="new-control-input" value="Bangladesh">Bangladesh</option>
   <option class="new-control-input" value="Barbados">Barbados</option>
   <option class="new-control-input" value="Belarus">Belarus</option>
   <option class="new-control-input" value="Belgium">Belgium</option>
   <option class="new-control-input" value="Belize">Belize</option>
   <option class="new-control-input" value="Benin">Benin</option>
   <option class="new-control-input" value="Bermuda">Bermuda</option>
   <option class="new-control-input" value="Bhutan">Bhutan</option>
   <option class="new-control-input" value="Bolivia">Bolivia</option>
   <option class="new-control-input" value="Bonaire">Bonaire</option>
   <option class="new-control-input" value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option class="new-control-input" value="Botswana">Botswana</option>
   <option class="new-control-input" value="Brazil">Brazil</option>
   <option class="new-control-input" value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option class="new-control-input" value="Brunei">Brunei</option>
   <option class="new-control-input" value="Bulgaria">Bulgaria</option>
   <option class="new-control-input" value="Burkina Faso">Burkina Faso</option>
   <option class="new-control-input" value="Burundi">Burundi</option>
   <option class="new-control-input" value="Cambodia">Cambodia</option>
   <option class="new-control-input" value="Cameroon">Cameroon</option>
   <option class="new-control-input" value="Canada">Canada</option>
   <option class="new-control-input" value="Canary Islands">Canary Islands</option>
   <option class="new-control-input" value="Cape Verde">Cape Verde</option>
   <option class="new-control-input" value="Cayman Islands">Cayman Islands</option>
   <option class="new-control-input" value="Central African Republic">Central African Republic</option>
   <option class="new-control-input" value="Chad">Chad</option>
   <option class="new-control-input" value="Channel Islands">Channel Islands</option>
   <option class="new-control-input" value="Chile">Chile</option>
   <option class="new-control-input" value="China">China</option>
   <option class="new-control-input" value="Christmas Island">Christmas Island</option>
   <option class="new-control-input" value="Cocos Island">Cocos Island</option>
   <option class="new-control-input" value="Colombia">Colombia</option>
   <option class="new-control-input" value="Comoros">Comoros</option>
   <option class="new-control-input" value="Congo">Congo</option>
   <option class="new-control-input" value="Cook Islands">Cook Islands</option>
   <option class="new-control-input" value="Costa Rica">Costa Rica</option>
   <option class="new-control-input" value="Cote DIvoire">Cote DIvoire</option>
   <option class="new-control-input" value="Croatia">Croatia</option>
   <option class="new-control-input" value="Cuba">Cuba</option>
   <option class="new-control-input" value="Curaco">Curacao</option>
   <option class="new-control-input" value="Cyprus">Cyprus</option>
   <option class="new-control-input" value="Czech Republic">Czech Republic</option>
   <option class="new-control-input" value="Denmark">Denmark</option>
   <option class="new-control-input" value="Djibouti">Djibouti</option>
   <option class="new-control-input" value="Dominica">Dominica</option>
   <option class="new-control-input" value="Dominican Republic">Dominican Republic</option>
   <option class="new-control-input" value="East Timor">East Timor</option>
   <option class="new-control-input" value="Ecuador">Ecuador</option>
   <option class="new-control-input" value="Egypt">Egypt</option>
   <option class="new-control-input" value="El Salvador">El Salvador</option>
   <option class="new-control-input" value="Equatorial Guinea">Equatorial Guinea</option>
   <option class="new-control-input" value="Eritrea">Eritrea</option>
   <option class="new-control-input" value="Estonia">Estonia</option>
   <option class="new-control-input" value="Ethiopia">Ethiopia</option>
   <option class="new-control-input" value="Falkland Islands">Falkland Islands</option>
   <option class="new-control-input" value="Faroe Islands">Faroe Islands</option>
   <option class="new-control-input" value="Fiji">Fiji</option>
   <option class="new-control-input" value="Finland">Finland</option>
   <option class="new-control-input" value="France">France</option>
   <option class="new-control-input" value="French Guiana">French Guiana</option>
   <option class="new-control-input" value="French Polynesia">French Polynesia</option>
   <option class="new-control-input" value="French Southern Ter">French Southern Ter</option>
   <option class="new-control-input" value="Gabon">Gabon</option>
   <option class="new-control-input" value="Gambia">Gambia</option>
   <option class="new-control-input" value="Georgia">Georgia</option>
   <option class="new-control-input" value="Germany">Germany</option>
   <option class="new-control-input" value="Ghana">Ghana</option>
   <option class="new-control-input" value="Gibraltar">Gibraltar</option>
   <option class="new-control-input" value="Great Britain">Great Britain</option>
   <option class="new-control-input" value="Greece">Greece</option>
   <option class="new-control-input" value="Greenland">Greenland</option>
   <option class="new-control-input" value="Grenada">Grenada</option>
   <option class="new-control-input" value="Guadeloupe">Guadeloupe</option>
   <option class="new-control-input" value="Guam">Guam</option>
   <option class="new-control-input" value="Guatemala">Guatemala</option>
   <option class="new-control-input" value="Guinea">Guinea</option>
   <option class="new-control-input" value="Guyana">Guyana</option>
   <option class="new-control-input" value="Haiti">Haiti</option>
   <option class="new-control-input" value="Hawaii">Hawaii</option>
   <option class="new-control-input" value="Honduras">Honduras</option>
   <option class="new-control-input" value="Hong Kong">Hong Kong</option>
   <option class="new-control-input" value="Hungary">Hungary</option>
   <option class="new-control-input" value="Iceland">Iceland</option>
   <option class="new-control-input" value="Indonesia">Indonesia</option>
   <option class="new-control-input" value="India">India</option>
   <option class="new-control-input" value="Iran">Iran</option>
   <option class="new-control-input" value="Iraq">Iraq</option>
   <option class="new-control-input" value="Ireland">Ireland</option>
   <option class="new-control-input" value="Isle of Man">Isle of Man</option>
   <option class="new-control-input" value="Israel">Israel</option>
   <option class="new-control-input" value="Italy">Italy</option>
   <option class="new-control-input" value="Jamaica">Jamaica</option>
   <option class="new-control-input" value="Japan">Japan</option>
   <option class="new-control-input" value="Jordan">Jordan</option>
   <option class="new-control-input" value="Kazakhstan">Kazakhstan</option>
   <option class="new-control-input" value="Kenya">Kenya</option>
   <option class="new-control-input" value="Kiribati">Kiribati</option>
   <option class="new-control-input" value="Korea North">Korea North</option>
   <option class="new-control-input" value="Korea Sout">Korea South</option>
   <option class="new-control-input" value="Kuwait">Kuwait</option>
   <option class="new-control-input" value="Kyrgyzstan">Kyrgyzstan</option>
   <option class="new-control-input" value="Laos">Laos</option>
   <option class="new-control-input" value="Latvia">Latvia</option>
   <option class="new-control-input" value="Lebanon">Lebanon</option>
   <option class="new-control-input" value="Lesotho">Lesotho</option>
   <option class="new-control-input" value="Liberia">Liberia</option>
   <option class="new-control-input" value="Libya">Libya</option>
   <option class="new-control-input" value="Liechtenstein">Liechtenstein</option>
   <option class="new-control-input" value="Lithuania">Lithuania</option>
   <option class="new-control-input" value="Luxembourg">Luxembourg</option>
   <option class="new-control-input" value="Macau">Macau</option>
   <option class="new-control-input" value="Macedonia">Macedonia</option>
   <option class="new-control-input" value="Madagascar">Madagascar</option>
   <option class="new-control-input" value="Malaysia">Malaysia</option>
   <option class="new-control-input" value="Malawi">Malawi</option>
   <option class="new-control-input" value="Maldives">Maldives</option>
   <option class="new-control-input" value="Mali">Mali</option>
   <option class="new-control-input" value="Malta">Malta</option>
   <option class="new-control-input" value="Marshall Islands">Marshall Islands</option>
   <option class="new-control-input" value="Martinique">Martinique</option>
   <option class="new-control-input" value="Mauritania">Mauritania</option>
   <option class="new-control-input" value="Mauritius">Mauritius</option>
   <option class="new-control-input" value="Mayotte">Mayotte</option>
   <option class="new-control-input" value="Mexico">Mexico</option>
   <option class="new-control-input" value="Midway Islands">Midway Islands</option>
   <option class="new-control-input" value="Moldova">Moldova</option>
   <option class="new-control-input" value="Monaco">Monaco</option>
   <option class="new-control-input" value="Mongolia">Mongolia</option>
   <option class="new-control-input" value="Montserrat">Montserrat</option>
   <option class="new-control-input" value="Morocco">Morocco</option>
   <option class="new-control-input" value="Mozambique">Mozambique</option>
   <option class="new-control-input" value="Myanmar">Myanmar</option>
   <option class="new-control-input" value="Nambia">Nambia</option>
   <option class="new-control-input" value="Nauru">Nauru</option>
   <option class="new-control-input" value="Nepal">Nepal</option>
   <option class="new-control-input" value="Netherland Antilles">Netherland Antilles</option>
   <option class="new-control-input" value="Netherlands">Netherlands (Holland, Europe)</option>
   <option class="new-control-input" value="Nevis">Nevis</option>
   <option class="new-control-input" value="New Caledonia">New Caledonia</option>
   <option class="new-control-input" value="New Zealand">New Zealand</option>
   <option class="new-control-input" value="Nicaragua">Nicaragua</option>
   <option class="new-control-input" value="Niger">Niger</option>
   <option class="new-control-input" value="Nigeria">Nigeria</option>
   <option class="new-control-input" value="Niue">Niue</option>
   <option class="new-control-input" value="Norfolk Island">Norfolk Island</option>
   <option class="new-control-input" value="Norway">Norway</option>
   <option class="new-control-input" value="Oman">Oman</option>
   <option class="new-control-input" value="Pakistan">Pakistan</option>
   <option class="new-control-input" value="Palau Island">Palau Island</option>
   <option class="new-control-input" value="Palestine">Palestine</option>
   <option class="new-control-input" value="Panama">Panama</option>
   <option class="new-control-input" value="Papua New Guinea">Papua New Guinea</option>
   <option class="new-control-input" value="Paraguay">Paraguay</option>
   <option class="new-control-input" value="Peru">Peru</option>
   <option class="new-control-input" value="Phillipines">Philippines</option>
   <option class="new-control-input" value="Pitcairn Island">Pitcairn Island</option>
   <option class="new-control-input" value="Poland">Poland</option>
   <option class="new-control-input" value="Portugal">Portugal</option>
   <option class="new-control-input" value="Puerto Rico">Puerto Rico</option>
   <option class="new-control-input" value="Qatar">Qatar</option>
   <option class="new-control-input" value="Republic of Montenegro">Republic of Montenegro</option>
   <option class="new-control-input" value="Republic of Serbia">Republic of Serbia</option>
   <option class="new-control-input" value="Reunion">Reunion</option>
   <option class="new-control-input" value="Romania">Romania</option>
   <option class="new-control-input" value="Russia">Russia</option>
   <option class="new-control-input" value="Rwanda">Rwanda</option>
   <option class="new-control-input" value="St Barthelemy">St Barthelemy</option>
   <option class="new-control-input" value="St Eustatius">St Eustatius</option>
   <option class="new-control-input" value="St Helena">St Helena</option>
   <option class="new-control-input" value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option class="new-control-input" value="St Lucia">St Lucia</option>
   <option class="new-control-input" value="St Maarten">St Maarten</option>
   <option class="new-control-input" value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option class="new-control-input" value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option class="new-control-input" value="Saipan">Saipan</option>
   <option class="new-control-input" value="Samoa">Samoa</option>
   <option class="new-control-input" value="Samoa American">Samoa American</option>
   <option class="new-control-input" value="San Marino">San Marino</option>
   <option class="new-control-input" value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option class="new-control-input" value="Saudi Arabia">Saudi Arabia</option>
   <option class="new-control-input" value="Senegal">Senegal</option>
   <option class="new-control-input" value="Seychelles">Seychelles</option>
   <option class="new-control-input" value="Sierra Leone">Sierra Leone</option>
   <option class="new-control-input" value="Singapore">Singapore</option>
   <option class="new-control-input" value="Slovakia">Slovakia</option>
   <option class="new-control-input" value="Slovenia">Slovenia</option>
   <option class="new-control-input" value="Solomon Islands">Solomon Islands</option>
   <option class="new-control-input" value="Somalia">Somalia</option>
   <option class="new-control-input" value="South Africa">South Africa</option>
   <option class="new-control-input" value="Spain">Spain</option>
   <option class="new-control-input" value="Sri Lanka">Sri Lanka</option>
   <option class="new-control-input" value="Sudan">Sudan</option>
   <option class="new-control-input" value="Suriname">Suriname</option>
   <option class="new-control-input" value="Swaziland">Swaziland</option>
   <option class="new-control-input" value="Sweden">Sweden</option>
   <option class="new-control-input" value="Switzerland">Switzerland</option>
   <option class="new-control-input" value="Syria">Syria</option>
   <option class="new-control-input" value="Tahiti">Tahiti</option>
   <option class="new-control-input" value="Taiwan">Taiwan</option>
   <option class="new-control-input" value="Tajikistan">Tajikistan</option>
   <option class="new-control-input" value="Tanzania">Tanzania</option>
   <option class="new-control-input" value="Thailand">Thailand</option>
   <option class="new-control-input" value="Togo">Togo</option>
   <option class="new-control-input" value="Tokelau">Tokelau</option>
   <option class="new-control-input" value="Tonga">Tonga</option>
   <option class="new-control-input" value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option class="new-control-input" value="Tunisia">Tunisia</option>
   <option class="new-control-input" value="Turkey">Turkey</option>
   <option class="new-control-input" value="Turkmenistan">Turkmenistan</option>
   <option class="new-control-input" value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option class="new-control-input" value="Tuvalu">Tuvalu</option>
   <option class="new-control-input" value="Uganda">Uganda</option>
   <option class="new-control-input" value="United Kingdom">United Kingdom</option>
   <option class="new-control-input" value="Ukraine">Ukraine</option>
   <option class="new-control-input" value="United Arab Erimates">United Arab Emirates</option>
   <option class="new-control-input" value="United States of America">United States of America</option>
   <option class="new-control-input" value="Uraguay">Uruguay</option>
   <option class="new-control-input" value="Uzbekistan">Uzbekistan</option>
   <option class="new-control-input" value="Vanuatu">Vanuatu</option>
   <option class="new-control-input" value="Vatican City State">Vatican City State</option>
   <option class="new-control-input" value="Venezuela">Venezuela</option>
   <option class="new-control-input" value="Vietnam">Vietnam</option>
   <option class="new-control-input" value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option class="new-control-input" value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option class="new-control-input" value="Wake Island">Wake Island</option>
   <option class="new-control-input" value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option class="new-control-input" value="Yemen">Yemen</option>
   <option class="new-control-input" value="Zaire">Zaire</option>
   <option class="new-control-input" value="Zambia">Zambia</option>
   <option class="new-control-input" value="Zimbabwe">Zimbabwe</option>

</select></label>  
                                    <br />


                                    <center>  <input type="button" class="btn btn-rounded btn-outline-secondary mb-2" class="new-control-input" value="Generate Proxies"> </center>
</div> 
                                </div>     </div>    </div> 







                                                <div class="col-lg-8">



                        <div id="fclCopyTextarea" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>
                                                 
Welcome back to Exodus Proxies</h4> 
                                        </div>
                                    </div>
                                </div>



                                <div class="widget-content widget-content-area clipboard-copy-textarea">
                                    <div class="clipboard">
                                        <form class="form-horizontal">
                                         <textarea class="form-control text-center mb-4" cols="80" rows="30" id="textarea-copy">Proxies will go here.</textarea>
                                            <a class="mb-2 btn btn-default btn-rounded" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#textarea-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Proxies </a>
                                            <a class="mb-2 btn btn-dark btn-rounded" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#textarea-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Cut Proxies</a>

                                               <a class="mb-2 btn btn-secondary btn-rounded" href="#/" target="_blank" id="testLink"  data-clipboard-action="cut" data-clipboard-target="#textarea-copy"> <i class="fas fa-download"></i>
                                                Download Proxies</a>
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
        </div>
        <!--  END CONTENT AREA  -->
                <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p class="font-cycle">Designed by <a href="https://mrthomasturner.com"> Thomas Turner</a></p>
                </div>
                <div class="offset-lg-4 col-lg-4">
                    <p class="font-cycle">© 2021 3xodus Proxies </p>
                </div>
    </div>
';



    }
    ?>


    <!-- END MAIN CONTAINER -->
    
    


    <script type="text/javascript">
        
(function() {
    /*! https://github.com/koffsyrup/FileSaver.js */
    var saveAs=saveAs ||(typeof navigator!=="undefined"&&navigator.msSaveOrOpenBlob&&navigator.msSaveOrOpenBlob.bind(navigator))||(function(view){"use strict";if(typeof navigator!=="undefined"&&/MSIE [1-9]\./.test(navigator.userAgent)){return}var doc=view.document,get_URL=function(){return view.URL||view.webkitURL||view},save_link=doc.createElementNS("http://www.w3.org/1999/xhtml","a"),can_use_save_link=!view.externalHost&&"download"in save_link,click=function(node){var event=doc.createEvent("MouseEvents");event.initMouseEvent("click",true,false,view,0,0,0,0,0,false,false,false,false,0,null);node.dispatchEvent(event)},webkit_req_fs=view.webkitRequestFileSystem,req_fs=view.requestFileSystem||webkit_req_fs||view.mozRequestFileSystem,throw_outside=function(ex){(view.setImmediate||view.setTimeout)(function(){throw ex},0)},force_saveable_type="application/octet-stream",fs_min_size=0,deletion_queue=[],process_deletion_queue=function(){var i=deletion_queue.length;while(i--){var file=deletion_queue[i];if(typeof file==="string"){get_URL().revokeObjectURL(file)}else{file.remove()}}deletion_queue.length=0;},dispatch=function(filesaver,event_types,event){event_types=[].concat(event_types);var i=event_types.length;while(i--){var listener=filesaver["on"+event_types[i]];if(typeof listener==="function"){try{listener.call(filesaver,event||filesaver)}catch(ex){throw_outside(ex)}}}},FileSaver=function(blob,name){var filesaver=this,type=blob.type,blob_changed=false,object_url,target_view,get_object_url=function(){var object_url=get_URL().createObjectURL(blob);deletion_queue.push(object_url);return object_url},dispatch_all=function(){dispatch(filesaver,"writestart progress write writeend".split(" "))},fs_error=function(){if(blob_changed||!object_url){object_url=get_object_url(blob)}if(target_view){target_view.location.href=object_url}else{window.open(object_url,"_blank")}filesaver.readyState=filesaver.DONE;dispatch_all()},abortable=function(func){return function(){if(filesaver.readyState!==filesaver.DONE){return func.apply(this,arguments)}}},create_if_not_found={create:true,exclusive:false},slice;filesaver.readyState=filesaver.INIT;if(!name){name="download"}if(can_use_save_link){object_url=get_object_url(blob);save_link.href=object_url;save_link.download=name;click(save_link);filesaver.readyState=filesaver.DONE;dispatch_all();return}if(view.chrome&&type&&type!==force_saveable_type){slice=blob.slice||blob.webkitSlice;blob=slice.call(blob,0,blob.size,force_saveable_type);blob_changed=true}if(webkit_req_fs&&name!=="download"){name+=".download"}if(type===force_saveable_type||webkit_req_fs){target_view=view}if(!req_fs){fs_error();return}fs_min_size+=blob.size;req_fs(view.TEMPORARY,fs_min_size,abortable(function(fs){fs.root.getDirectory("saved",create_if_not_found,abortable(function(dir){var save=function(){dir.getFile(name,create_if_not_found,abortable(function(file){file.createWriter(abortable(function(writer){writer.onwriteend=function(event){target_view.location.href=file.toURL();deletion_queue.push(file);filesaver.readyState=filesaver.DONE;dispatch(filesaver,"writeend",event)};writer.onerror=function(){var error=writer.error;if(error.code!==error.ABORT_ERR){fs_error()}};"writestart progress write abort".split(" ").forEach(function(event){writer["on"+event]=filesaver["on"+event]});writer.write(blob);filesaver.abort=function(){writer.abort();filesaver.readyState=filesaver.DONE};filesaver.readyState=filesaver.WRITING}),fs_error)}),fs_error)};dir.getFile(name,{create:false},abortable(function(file){file.remove();save()}),abortable(function(ex){if(ex.code===ex.NOT_FOUND_ERR){save()}else{fs_error()}}))}),fs_error)}),fs_error)},FS_proto=FileSaver.prototype,saveAs=function(blob,name){return new FileSaver(blob,name)};FS_proto.abort=function(){var filesaver=this;filesaver.readyState=filesaver.DONE;dispatch(filesaver,"abort")};FS_proto.readyState=FS_proto.INIT=0;FS_proto.WRITING=1;FS_proto.DONE=2;FS_proto.error=FS_proto.onwritestart=FS_proto.onprogress=FS_proto.onwrite=FS_proto.onabort=FS_proto.onerror=FS_proto.onwriteend=null;view.addEventListener("unload",process_deletion_queue,false);saveAs.unload=function(){process_deletion_queue();view.removeEventListener("unload",process_deletion_queue,false)};return saveAs}(typeof self!=="undefined"&&self||typeof window!=="undefined"&&window||this.content));if(typeof module!=="undefined"&&module!==null){module.exports=saveAs}else if((typeof define!=="undefined"&&define!==null)&&(define.amd!=null)){define([],function(){return saveAs})}String.prototype.endsWithAny=function(){var strArray=Array.prototype.slice.call(arguments),$this=this.toLowerCase().toString();for(var i=0;i<strArray.length;i+=1){if($this.indexOf(strArray[i],$this.length-strArray[i].length)!==-1){return true}}return false};var saveTextAs=saveTextAs||(function(textContent,fileName,charset){fileName=fileName||'download.txt';charset=charset||'utf-8';textContent=(textContent||'').replace(/\r?\n/g,"\r\n");if(saveAs&&Blob){var blob=new Blob([textContent],{type:"text/plain;charset="+charset});saveAs(blob,fileName);return true}else{var saveTxtWindow=window.frames.saveTxtWindow;if(!saveTxtWindow){saveTxtWindow=document.createElement('iframe');saveTxtWindow.id='saveTxtWindow';saveTxtWindow.style.display='none';document.body.insertBefore(saveTxtWindow,null);saveTxtWindow=window.frames.saveTxtWindow;if(!saveTxtWindow){saveTxtWindow=window.open('','_temp','width=100,height=100');if(!saveTxtWindow){window.alert('Sorry, download file could not be created.');return false}}}var doc=saveTxtWindow.document;doc.open('text/html','replace');doc.charset=charset;if(fileName.endsWithAny('.htm','.html')){doc.close();doc.body.innerHTML='\r\n'+textContent+'\r\n'}else{if(!fileName.endsWithAny('.txt')){fileName+='.txt'}doc.write(textContent);doc.close()}var retValue=doc.execCommand('SaveAs',null,fileName);saveTxtWindow.close();return retValue}});

    /*----*/

    var area = document.getElementById('textarea-copy');
    var link = document.getElementById('testLink');

    link.addEventListener('click', function(e) {
        e.preventDefault();
        saveTextAs(area.value, 'proxies-download.txt');
    }, false);
})();
    </script>
    



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="plugins/highlight/highlight.pack.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/forms/custom-clipboard.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>
</html>
<!-- //contact -->
