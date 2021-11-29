<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: boards/add view
    Date: 2021-08-26
    Author: Coty McKinney
*/

?>

    <div class="view board-add-view">
        <div class="form board-add-form">
            <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="header">
                    <h1 class="h3 mb-3 fw-normal">Add board</h1>
                </div>
                <div class="form-group">
                    <label><ins>Title</ins></label>
                    <input 
                        type="text"
                        name="title"
                        class="form-control"
                        placeholder="Let's talk gear!" 
                    /> 
                </div>
                <div class="form-group">
                    <label><ins>Description</ins></label>
                    <textarea name="description" class="form-control">Board description here....</textarea> 
                </div>
                <input class="w-100 btn btn-lg btn-primary" name="submit" type="submit" value="submit"/>
                <a class="w-100 btn btn-lg btn-warning" href="<?php echo ROOT_PATH;?>boards">Cancel</a>
            </form>
        </div>
    </div>