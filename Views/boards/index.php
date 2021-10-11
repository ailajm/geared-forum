<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: boards/index view
    Date: 2021-08-26
    Author: Coty McKinney
*/

// Class instances
    $boardModel = new BoardModel;

//Global variables
    $rows = $boardModel->Index();

?>

    <div class='boardsIndexPage'>
        <h1>This is the boards index!</h1>
        <a class="btn btn-success btn-board" href="<?php echo ROOT_URL; ?>boards/add">Sound off!</a>
    </div>

<?php 

// Generate rows for boards
    echo "<div class='boardRows well'>";
    for($i = 0; $i<count($rows); $i++) {
        $title = $rows[$i]["title"];
        $createDate = $rows[$i]["creation_date"];
        $boardDescription = $rows[$i]["description"];
        $boardLink = $rows[$i]["link"];
        echo "<li><h2>$title<h2></li>";
        echo "<small><ins>Created on</ins>: $createDate</small>";
        echo "<hr />";
        echo "<p>$boardDescription</p>";
        echo "<a class='btn btn-primary' href='$boardLink' target='_blank'>Go!</a>";
        echo "<br />";
    }
    echo "</div>";

?>
