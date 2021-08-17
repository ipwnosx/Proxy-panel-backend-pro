<?php
require_once 'header.php';

//check if the form was submitted
if (Input::exists()) {

    if (Token::check(Input::get('token'))) {

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'unique' => 'users'
            ),
            'email' => array(
                'unique' => 'users'
            ),
            'phone' => array(
                'unique' => 'users'
            )
        ));

        if ($validation->passed()) {
            $user = new User();
            try {
                $user->create(array(
                    'username' => Input::get('username'),
                    'email' => Input::get('email'),
                    'phone' => Input::get('phone'),
                    'password' => Hash::make(Input::get('password'))
                ));

                //Flash and redirect
                Session::flash('success', 'You have been successfully registered and can now login!');
                Redirect::to('index.php');

            } catch (Exception $e) {
                die($e->getMessage());
            }
        } else {
            foreach ($validation->errors() as $error) {
                echo '<strong><em><p class="text-danger" style="text-align: center;">'.$error, '</br></p></em></strong>';
            }
        }
    }
}
?>

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

                <form action="" method="post" onsubmit=" return Validate_form()">
                    <div class="form-group">
                                <div id="username-field" class="field-wrapper input">
 <label for="username"><em><strong>USERNAME:</strong></em></label>                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>



                        <input required type="text" name="username" id="username" value="<?php echo escape(Input::get('username'))?>" class="form-control">
                        <p class="error"></p>
                    </div>
                    <div class="form-group">
                                <div id="email-field" class="field-wrapper input">

                        <label for="email" ><em><strong class="text-left">EMAIL ADDRESS:</strong></em></label>
                        <input required type="text" name="email" id="email" value="<?php echo escape(Input::get('email'))?>" class="form-control">                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>

                        <p class="error"></p>
                    </div>
                        <input required type="hidden" name="phone" id="phone" value="<?php echo(rand()); ?>" class="form-control">

                                <div id="password-field" class="field-wrapper input">

                        <label for="password"><em><strong>PASSWORD:</strong></em></label>                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>

                        <input required type="password" name="password" id="password" class="form-control">
                        <p class="error"></p>
                    </div>

                                <div id="password2-field" class="field-wrapper input">

                    <div class="form-group">
                        <label for="repeat_password"><em><strong>PASSWORD CONFIRMATION:</strong></em></label>
                        <input required type="password" name="repeat_password" id="repeatPass" class="form-control">
                        <p class="error"></p>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>                    <div class="field-wrapper">

                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    
                    <p> Have an Account? Login <a href="index.php"> here  </a> </p>
    
                    <input type="submit"  value="REGISTER" class="btn btn-primary">

                     </div>
                </form>
            </div>




        </div>
    </div>
<?php require_once 'footer.php'; ?>