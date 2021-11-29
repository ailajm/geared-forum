<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: boards/index view
    Date: 2021-08-26
    Author: Coty McKinney
*/

// Class instances
    $boardModel = new BoardModel;

//Global variables
    $rows = $boardModel->Index();

?>

    <div class='view boards-index-view'>
        <h1 class="header">Soundboards</h1>

<?php
    if(isset($_SESSION['is_logged_in'])) {
        echo "<a class='btn btn-lg btn-success btn-board' href='".ROOT_URL."boards/add'>Sound off!</a>";
    } 

// Generate rows for boards
    echo "<div class='boardRows well'>";
    for($i = 0; $i<count($rows); $i++) {
        $title = $rows[$i]["title"];
        $createDate = $rows[$i]["create_date"];
        $boardDescription = $rows[$i]["description"];
        $catId = $rows[$i]["cat_id"];
        echo "<li><h2>$title<h2></li>";
        echo "<small><ins>Created on</ins>: $createDate</small>";
        echo "<hr />";
        echo "<p>$boardDescription</p>";
        echo "<a class='btn btn-primary' href='boards/board?cat_id=$catId' title='$title' target='_blank'>Go!</a>";
        echo "<br />";
    }
    echo "</div>";

?>
    </div>