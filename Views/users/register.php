<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: user/register view
    Date: 2021-08-26
    Author: Coty McKinney
*/

    echo "<h1>This is the users registration!</h1>";

?>
    <div class="form user-register-form">
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label>username</label>
                <input 
                    type="text"
                    name="name"
                    class="form-control" >
                    yourUserNameHere
                </input> 
            </div>
            <div class="form-group">
                <label>email</label>
                <input 
                    type="text" 
                    name="email" 
                    class="form-control">
                    tomServo@examplonet.com
                </input> 
            </div>
            <div class="form-group">
                <label>Password</label>
                <input 
                    type="password"
                    name="password"
                    class="form-control" 
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
            <input class="btn btn-primary btn-submit" name="submit" type="submit" value="submit"/>
            <a class="btn btn-warning" href="<?php echo ROOT_PATH;?>">Cancel</a>
        </form>
    </div>