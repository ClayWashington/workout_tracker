<p>Enter Workout Data:<br><br></p>

<?php

    require_once('library/Display.php');

    $display = new Display();

    $date = date('F d, Y');

    echo 
        "<form action=\"index.php\" method=\"post\">
            <p>Time (minutes):</p>
            <input type=\"text\" name=\"time\" size=\"10\" ><br><br>
            <p>Date:</p>
            <input type=\"text\" name=\"date\" value = \"$date\" size=\"10\" ><br><br>
            <input type=\"submit\" value=\"Submit\" >
            <input type=\"hidden\" value=\"action/add_workout\" name=\"content\" >
        </form>";

    $display->display_cardio_list();

?>