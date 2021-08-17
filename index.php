<?php
require_once 'header.php';
if (Input::exists()) {
    if (Token::check(Input::get('token'))){

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true),
        ));

        if ($validation->passed()){
            $user = new User();

            $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);

            if ($login){
               Session::flash('success', '<div class="alert alert-success"><p>Login success</p></div>');
                Redirect::to('home.php');
            } else {
                echo '<strong><em><p class="text-danger" style="text-align: center;">Sorry, logging in failed.</p></em></strong>';
            }
        } else {
            foreach ($validation->errors() as $error){
                echo '<strong><em><p class="text-danger" style="text-align: center;">'.$error, '</br></p></em></strong>';
            }
        }
    }
}
?>

<style> @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap'); </style>

<style type="text/css">
    
    .field-wrapper  {
    text-align: left;
}

</style>

  <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

            <div class="card-body">
                    <h3 class="text-center" style="color: white;"><em><strong><img src="images/logo.png" style="width: 150px;"></strong></em></h3>
                    <h4> Login </h4>
<?php if ($_GET['msg'])
{
       echo ' <div class="success_message"><p>' . base64_decode(urldecode($_GET['msg'])) . ' </p> </div> ';
}?>

                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
              <div class="form-group">
                                <div id="username-field" class="field-wrapper input">
 <label for="username"><em><strong>USERNAME:</strong></em></label>                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>

                            <input type="text" name="username" id="username" class="form-control" required>
                            <p class="error"></p>
                        </div>
                        <div class="form-group">
         <div id="password-field" class="field-wrapper input">

                        <label for="password"><em><strong>PASSWORD:</strong></em></label>                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>

                                                    <input type="password" name="password" id="password" class="form-control" required>
                            <p class="error"></p>
                        </div>

                        <div class="form-group">
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember" style="color: white;"><em><strong>Remember Me</strong></em>
                            </label>
                        </div>
                        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                        <input type="submit" value="LOGIN" class="btn btn-block btn-primary">
                    </form>
                </div>
            </div>
                    <a href="register.php"><button class="btn btn-danger btn-block">REGISTER</button></a>
            </div>
    </div>
<?php require_once 'footer.php'; ?>