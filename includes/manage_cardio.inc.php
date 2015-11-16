<p>Enter Cardio:<br><br></p>

<?php

    require_once('library/Display.php');

    $display = new Display();

    $date = date('F d, Y');

    echo 
        "<form action=\"index.php\" method=\"post\">
            <p>Exercise:</p>
            <input type=\"text\" name=\"exercise\" size=\"10\" ><br><br>
            <p>Time (minutes):</p>
            <input type=\"text\" name=\"time\" size=\"10\" ><br><br>
            <p>distance (miles):</p>
            <input type=\"text\" name=\"distance\" size=\"10\" ><br><br>
            <p>level:</p>
            <input type=\"text\" name=\"level\" size=\"10\" ><br><br>
            <p>Date:</p>
            <input type=\"text\" name=\"date\" value = \"$date\" size=\"10\" ><br><br>
            <input type=\"submit\" value=\"Submit\" >
            <input type=\"hidden\" value=\"action/add_cardio\" name=\"content\" >
        </form>";
?>

    <p>Your Cardio Workouts</p><br><br>
<?php
    
    $display->display_cardio_list();
?>
