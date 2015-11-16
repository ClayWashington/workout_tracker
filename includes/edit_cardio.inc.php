<p>Edit Cardio:<br><br></p>

<?php

    require_once('library/DataHandler.php');

    $id = $_GET['id'];
    $dh = new DataHandler();

    $cardio = $dh->get_cardio_by_id($id);

    $exercise = $cardio->get_name();
    $time = $cardio->get_time();
    $distance = $cardio->get_distance();
    $level = $cardio->get_level();
    $date = $cardio->get_date();   

    echo  
        "<form action=\"index.php\" method=\"post\">
            <p>Exercise:</p>
            <input type=\"text\" name=\"exercise\" value = \"$exercise\" size=\"10\" ><br><br>
            <p>Time (minutes):</p>
            <input type=\"text\" name=\"time\" value = \"$time\" size=\"10\" ><br><br>
            <p>distance (miles):</p>
            <input type=\"text\" name=\"distance\" value = \"$distance\" size=\"10\" ><br><br>
            <p>level:</p>
            <input type=\"text\" name=\"level\" value = \"$level\" size=\"10\" ><br><br>
            <p>Date:</p>
            <input type=\"text\" name=\"date\" value = \"$date\" size=\"10\" ><br><br>
            <input type=\"submit\" value=\"Update\" >
            <input type=\"hidden\" value=\"$id\" name=\"id\" >
            <input type=\"hidden\" value=\"action/update_cardio\" name=\"content\" >
        </form>";

?>


