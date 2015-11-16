<p>Enter Exercise:<br><br></p>

<?php

    if (isset($_REQUEST['w_id'])) {
        $w_id = $_REQUEST['w_id'];
    }

    echo
        "<form action\"=index.php\" method=\"post\">
             <p>Exercise Name:</p>
             <input type=\"text\" size=\"10\" name=\"exercise_name\" >
             <input type=\"submit\" value=\"Enter\" >
             <input type=\"hidden\" value=\"action/add_exercise\" name=\"content\" >
             <input type=\"hidden\" value=\"$w_id\" name=\"w_id\" >
         </form>";

?>