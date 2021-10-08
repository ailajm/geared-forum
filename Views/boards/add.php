<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: boards/add view
    Date: 2021-08-26
    Author: Coty McKinney
*/

    echo "<h1>This is the boards add!</h1>";

?>

    <div class="form board-add-form">
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label>Title</label>
                <input 
                    type="text"
                    name="title"
                    class="form-control" 
                /> 
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">Board description here....</textarea> 
            </div>
            <div class="form-group">
                <label>Link</label>
                <input 
                    type="text"
                    name="link"
                    class="form-control" 
                /> 
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="submit"/>
            <a class="btn btn-warning" href="<?php echo ROOT_PATH;?>boards">Cancel</a>
        </form>
    </div>