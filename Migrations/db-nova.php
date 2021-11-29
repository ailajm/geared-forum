<?php

$mysql_host = "<YOUR-HOST-ADDRESS-OR-NAME>";
$mysql_database = "<YOUR-DB-NAME>";
$mysql_user = "<YOUR-USERNAME>";
$mysql_password = "<YOUR-PASSWORD>";

# MySQL with PDO_MYSQL  

$db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

$q1 = file_get_contents("./forum-cat.sql");
$q2 = file_get_contents("./forum-topics.sql");
$q3 = file_get_contents("./forum-posts.sql");
$q4 = file_get_contents("./forum-users.sql");

$stmt = $db->prepare($q1);

if ($stmt->execute()){
     echo "Cat Table Creation Success";
}else{ 
     echo "Cat Table Creation Fail";
}

$stmt = $db->prepare($q2);

if ($stmt->execute()){
     echo "Topics Table Creation Success";
}else{
     echo "Topics Table Creation Fail";
}

$stmt = $db->prepare($q3);

if ($stmt->execute()){
     echo "Posts Table Creation Success";
}else{
     echo "Posts Table Creation Fail";
}

$stmt = $db->prepare($q4);

if ($stmt->execute()){
     echo "Users Table Creation Success";
}else{
     echo "Users Table Creation Fail";
}

?>
