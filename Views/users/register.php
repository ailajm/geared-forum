<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: user/register view
    Date: 2021-08-26
    Author: Coty McKinney
*/

?>
    <div class="view user-register-view">
<!-- start page -->
        <div class="form user-register-form">
            <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<!-- branding and prompt -->
                <div class="header">
                    <img class="mb-4" src="<?php echo ROOT_PATH; ?>Assets/images/napster-brands.svg" alt="GEARED Logo" width="160" height="135">
                    <h1 class="h3 mb-3 fw-normal">Register your account</h1>
                </div>
<!-- fields -->
                <div class="form-group">
                    <label><ins>Username</ins></label>
                    <input 
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="cambot3000">
                    </input> 
                </div>
                <div class="form-group">
                    <label><ins>email</ins></label>
                    <input 
                        type="text" 
                        name="email" 
                        class="form-control"
                        placeholder="crow-t-robot@satellite0love.com">
                    </input> 
                </div>
                <div class="form-group">
                    <label><ins>Password</ins></label>
                    <input 
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="password" 
                    /> 
                </div>
                <!-- <div class="form-group">
                    <label>Confirm Password</label>
                    <input 
                        type="password"
                        name="confirmPassword"
                        class="form-control" 
                    /> 
                </div> -->
<!-- buttons -->
                <input class="w-100 btn btn-lg btn-primary btn-submit" name="submit" type="submit" value="submit"/>
                <a class="w-100 btn btn-lg btn-warning btn-cancel" href="<?php echo ROOT_PATH;?>">Cancel</a>
            </form>
<!-- end form -->
        </div>
    </div>
<!-- end page -->