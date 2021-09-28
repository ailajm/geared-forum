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

    <div class="form">
        <form>
            <div class="form-group">
                <label>
                    Share Title
                </label>
                <input 
                    type="text"
                    name="title"
                    class="form-control" 
                /> 
            </div>
            <div class="form-group">
                <label>
                    Body
                </label>
                <textarea name="body" class="form-control">
                    Board description here....
                </textarea> 
            </div>
            <div class="form-group">
                <label>
                    Posts
                </label>
                <input 
                    type="text"
                    name="posts"
                    class="form-control" 
                /> 
            </div>
            <input class="btn btn-success" name="submit" type="submit" value="submit"/>
            <a class="btn btn-warning" href="<?php echo ROOT_URL;?>boards">Cancel</a>
        </form>
    </div>