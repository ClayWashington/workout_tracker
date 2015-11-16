<p>Enter Set Data:<br><br></p>

<?php
    
    $w_id = $_GET['w_id'];
    $e_id = $_GET['e_id'];

    echo 
        "<form action=\"index.php\" method=\"post\" >
            <p>Number of Reps:</p>
            <input type\"text\" name=\"reps\" size=\"10\" ><br><br>
            <p>Weight:</p>
            <input type\"text\" name=\"weight\" size=\"10\" ><br><br>
            <input type=\"submit\" value=\"Enter\" >
            <input type=\"hidden\" name=\"content\" value=\"action/add_set\" >
            <input type=\"hidden\" name=\"w_id\" value=\"$w_id\" >
            <input type=\"hidden\" name=\"e_id\" value=\"$e_id\" >
        </form>";

?>