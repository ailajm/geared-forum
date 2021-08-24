<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: PDO database class & connection
    Date: 2021-08-08
    Author: Coty McKinney
*/

    require 'Classes/Database.php';

    $database = new Database;

    //if($database) echo 'Connected!';
    //print_r($database);
 
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($_POST['delete']) {
        $deleteId = $_POST['deleteId'];
        $database->query('DELETE FROM posts WHERE id=:id');
        $database->bind(':id', $deleteId);
        $database->execute();
    }
    
    if(isset($post['submit'])) {
        $id = $post['id'];
        $title = $post['title'];
        $body = $post['body'];
        
        //$database->query('INSERT INTO posts (title, body) VALUES (:title, :body)');
        $database->query('UPDATE posts SET title=:title, body=:body where id = :id');
        $database->bind(':title', $title);
        $database->bind(':body', $body);
        $database->bind(':id', $id);
        $database->execute();
        
        if($database->lastInsertId()) {
            echo '<p>Post Added!</p>';
        }
    }
    
    $database->query('SELECT * FROM posts');
    // $database->query('SELECT * FROM posts WHERE id = :id');
    // $database->bind(':id', 3);
    $rows = $database->resultSet();
    //print_r($rows);

?>
<h1>Add Posts</h1>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Post ID</label><br />
    <input type="number" name="id" placeholder="Specify ID..."/><br/><br/>
    <label>Post Title</label><br />
    <input type="text" name="title" placeholder="Add a title..."/><br/><br/>
    <label>Post Body</label><br/>
    <textarea name="body"></textarea><br/><br/>
    <input type="submit" name="submit" value="submit"/><br/>
</form>
<h2>Posts</h2>
<div>
<?php foreach($rows as $row) : ?>
    <div>
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['body']; ?></p><br/>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="deleteId" value="<?php echo $row['id']; ?>"/>
            <input type="submit" name="delete" value="delete"/>
        </form>
    </div>
<?php endforeach; ?>
</div>