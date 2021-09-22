<!-- Start Navigation -->
    <div class="navbar navbar-default navi" id="navi">
        <div class="brandingIconNav">
            <img src='./Assets/images/napster-brands.svg' alt='branding-icon'/>
        </div>
        <div class="navLinks">
            <a href="<?php echo ROOT_URL; ?>">Home</a>
            <a href="<?php echo ROOT_URL . "boards"; ?>">Boards</a>
            <?php
                $loggedIn = false;

                if($loggedIn) {
                    echo "<a href=" . ROOT_URL . "user>User</a>";
                }else {
                    echo "
                        <a href=" . ROOT_URL . "users/login>Log-In</a>
                        <a href=" . ROOT_URL . "users/register>Register</a>
                    ";
                }
            ?>
            <a href="<?php echo ROOT_URL . "about"; ?>">About</a>
        </div>
    </div>
<!-- End Navigation -->
<!-- Start Content -->