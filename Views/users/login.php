<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: user/login view
    Date: 2021-08-26
    Author: Coty McKinney
*/

?>

<!-- start user login view -->
    <div class="view user-login-view">
<!-- login form -->
        <div class="form user-login-form">
            <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
<!-- branding and prompt -->
                <div class="header">
                    <img class="mb-4" src="<?php echo ROOT_PATH; ?>Assets/images/napster-brands.svg" alt="GEARED Logo" width="160" height="135">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                </div>               
<!-- text fields -->
                <div class="form-group">
                    <label>Username</label>
                    <input 
                    type="text"
                    name="username"
                    class="form-control"
                    placeholder="tomServo13" /> 
                </div>
            
                <div class="form-group">
                    <label>Password</label>
                    <input 
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="password" 
                    /> 
                </div>
<!-- buttons -->
                <div class="checkbox mb-3 form-group">
                    <label>
                        <input type="checkbox" value="remember-me"> <ins>Remember me</ins>
                    </label>
                </div>
                <input class="w-100 btn btn-lg btn-primary btn-submit" name="submit" type="submit" value="submit"/>
                <a class="w-100 btn btn-lg btn-warning btn-cancel" href="<?php echo ROOT_PATH;?>">Cancel</a>
<!-- end form -->
            </form>
<!-- end form div -->
        </div>
<!-- page end -->
    </div>