<?php require_once 'header.php'; ?>  


<style type="text/css">
    
    .card-body {
    background: #29044c;
}

.sidebar-wrapper.sidebar-theme {}

    div#content {}

header.header.navbar.navbar-expand-sm.expand-header {
    background: #430182;
}

li.menu {
    background: #430182;
}
</style>

    <link href="assets/css/pages/faq/faq2.css" rel="stylesheet" type="text/css" /> 


<body class="alt-menu sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
    
    <!--  BEGIN NAVBAR  -->
    <div class="header-container hidden-md d-none ">
        <header class="header navbar navbar-expand-sm expand-header ">


            <ul class="navbar-item flex-row ml-auto ">

            


                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">                            
                            <div class="media mx-auto">
                                <img src="assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>Alan Green</h5>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>My Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>My Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

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
                        <a href="index.php" aria-expanded="false" class="dropdown-toggle">
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







                    
                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="faq">



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

                    <div class="faq-layouting layout-spacing">

                        <div class="fq-tab-section layout-top-spacing">
                            <div class="row">
                                <div class="col-md-12">

                                    <h2>Frequently Asked <span>Questions</span></h2>

                                    <div class="row">
                                        
                                        <div class="col-lg-6">

                                            <div class="accordion" id="simple_faq">
                                                <div class="card">
                                                    <div class="card-header" id="fqheadingOne">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseOne" aria-expanded="false" aria-controls="fqcollapseOne">
                                                            <span class="faq-q-title">Getting started</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne" data-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingTwo">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseTwo" aria-expanded="true" aria-controls="fqcollapseTwo">
                                                            <span class="faq-q-title">How can I unzip porduct files</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseTwo" class="collapse show" aria-labelledby="fqheadingTwo" data-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingThree">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseThree" aria-expanded="false" aria-controls="fqcollapseThree">
                                                            <span class="faq-q-title">Sidebar not rendering CSS</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseThree" class="collapse" aria-labelledby="fqheadingThree" data-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingFour">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseFour" aria-expanded="false" aria-controls="fqcollapseFour">
                                                            <span class="faq-q-title">Production Level Built</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseFour" class="collapse" aria-labelledby="fqheadingFour" data-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingFive">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseFive" aria-expanded="false" aria-controls="fqcollapseFive">
                                                            <span class="faq-q-title">Compilation Issue</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseFive" class="collapse" aria-labelledby="fqheadingFive" data-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingSix">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseSix" aria-expanded="false" aria-controls="fqcollapseSix">
                                                            <span class="faq-q-title">Getting started with starter kits</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseSix" class="collapse" aria-labelledby="fqheadingSix" data-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  

                                        </div>
                                        <div class="col-lg-6">
                                            
                                            <div class="accordion" id="simple_faq1">
                                                <div class="card">
                                                    <div class="card-header" id="fqheadingOne1">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseOne1" aria-expanded="false" aria-controls="fqcollapseOne1">
                                                            <span class="faq-q-title">Are images are provided in the download version?</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseOne1" class="collapse" aria-labelledby="fqheadingOne1" data-parent="#simple_faq1">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingTwo2">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseTwo2" aria-expanded="false" aria-controls="fqcollapseTwo2">
                                                            <span class="faq-q-title">How can I customize APPS sections?</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseTwo2" class="collapse" aria-labelledby="fqheadingTwo2" data-parent="#simple_faq1">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingThree3">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseThree3" aria-expanded="false" aria-controls="fqcollapseThree3">
                                                            <span class="faq-q-title">Getting started with multiple layouts</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseThree3" class="collapse" aria-labelledby="fqheadingThree3" data-parent="#simple_faq1">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingFour4">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseFour4" aria-expanded="false" aria-controls="fqcollapseFour4">
                                                            <span class="faq-q-title">How to use task managers?</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseFour4" class="collapse" aria-labelledby="fqheadingFour4" data-parent="#simple_faq1">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingFive5">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseFive5" aria-expanded="false" aria-controls="fqcollapseFive5">
                                                            <span class="faq-q-title">How to setup a vpn?</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseFive5" class="collapse" aria-labelledby="fqheadingFive5" data-parent="#simple_faq1">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="fqheadingSix6">
                                                        <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseSix6" aria-expanded="true" aria-controls="fqcollapseSix6">
                                                            <span class="faq-q-title">Chrome vs Edge which is better!</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapseSix6" class="collapse show" aria-labelledby="fqheadingSix6" data-parent="#simple_faq1">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
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
                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/pages/faq/faq2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>