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
         





                                                <div class="col-lg-12">



   <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <h4 class=" mt-2 mb-2">Our Pricing</h4>
                                    </div>           
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="container">                                    
                                    <div id="pricingWrapper" class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-5">
                                                <div class="card-header pt-0">
                                                    <span class="card-price">$4.99</span>
                                                    <h3 class="card-title mt-3 mb-1">7 Days</h3>
                                                    <p>Use our service for 7 days, idea for quick uses.</p>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">1 week access token
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Friendly user panel
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Great customer support
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Thousands of proxies
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Checked every hour
                                                        </li>
                                                    </ul>
                                                    <a href="" class="btn btn-rounded btn-outline-secondary mb-2">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>                              
                                                                       <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-5">
                                                <div class="card-header pt-0">
                                                    <span class="card-price">$4.99</span>
                                                    <h3 class="card-title mt-3 mb-1">7 Days</h3>
                                                    <p>Use our service for 7 days, idea for quick uses.</p>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">1 week access token
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Friendly user panel
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Great customer support
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Thousands of proxies
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Checked every hour
                                                        </li>
                                                    </ul>
                                                    <a href="" class="btn btn-rounded btn-outline-secondary mb-2">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-5">
                                                <div class="card-header pt-0">
                                                    <span class="card-price">$4.99</span>
                                                    <h3 class="card-title mt-3 mb-1">7 Days</h3>
                                                    <p>Use our service for 7 days, idea for quick uses.</p>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">1 week access token
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Friendly user panel
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Great customer support
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Thousands of proxies
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Checked every hour
                                                        </li>
                                                    </ul>
                                                    <a href="" class="btn btn-rounded btn-outline-secondary mb-2">Buy Now</a>
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
