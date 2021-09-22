<?php
/*
    Title: Shareboard 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: boards/index view
    Date: 2021-08-26
    Author: Coty McKinney
*/

// Includes

// Class instances
    $boardModel = new BoardModel;

//Global variables
    $rows = $boardModel->index();

?>

    <div class='boardsIndexPage'>
        <h1>This is the boards index!</h1>
        <a class="btn btn-success btn-board" href="<?php echo ROOT_URL; ?>boards/add">Sound off!</a>
    </div>

<?php 

    echo "<div class='boardRows well'>";
    for($i = 0; $i<count($rows); $i++) {
        $title = $rows[$i]["title"];
        $createDate = $rows[$i]["create_date"];
        $shareBody = $rows[$i]["body"];
        $shareLink = $rows[$i]["link"];
        echo "<li><h2>$title<h2></li>";
        echo "<small><ins>Created on</ins>: $createDate</small>";
        echo "<hr />";
        echo "<p>$shareBody</p>";
        echo "<a class='btn btn-primary' href='$shareLink' target='_blank'>Go to link!</a>";
        echo "<br />";
    }
    echo "</div>";

?>
