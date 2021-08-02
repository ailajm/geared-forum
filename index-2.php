<?php

class User{
    public function register(){
        echo 'User registered!';
    }

    public function login($username, $password) {
        echo $username . ' is now logged in!';
    }

}

$User = new User;

echo "<head>";
    echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'"; 
    echo "integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>";
echo "</head>";

echo "<body>";
    $User->register();
    echo "</br>";
    $User->login('brad', '1234');


echo "</body>";
?>