<!-- Start Navigation -->
    <div class="navbar navbar-default navi" id="navi">
        <div class="brandingIconNav">
            <a class="btn" href="<?php echo ROOT_PATH;?>">
                <img class="logo nav-logo" src='<?php echo ROOT_PATH; ?>Assets/images/equalizer.png' alt='branding-icon'/>
            </a>
        </div>
        <div class="navLinks">
            <a href="<?php echo ROOT_PATH; ?>">Home</a>
            <a href="<?php echo ROOT_PATH . "boards"; ?>">Boards</a>
            <?php
                if(isset($_SESSION['is_logged_in'])) {
                    echo "<a href=" . ROOT_PATH . "users/>{$_SESSION['user_data']['username']}</a>";
                    echo "<a href=" . ROOT_PATH . "users/logout>Logout</a>";
                }else {
                    echo "
                        <a href=" . ROOT_PATH . "users/login>Log-In</a>
                        <a href=" . ROOT_PATH . "users/register>Register</a>
                    ";
                }
            ?>
            <a href="<?php echo ROOT_PATH . "about"; ?>">About</a>
        </div>
    </div>
<!-- End Navigation -->
<!-- Start Content -->