<?php

    $valid = $_POST['enter'];

    if ($valid == 51076) {

        echo "
           <div id=\"header\">
               <ul>
                   <li><a href=\"index.php?content=includes/manage_workout&&header=header\">Manage Workouts</a></li>
                   <li><a href=\"index.php?content=includes/manage_cardio&&header=header\">Manage Cardio</a></li>
                   <li><a href=\"index.php?content=about&&header=header_main\">Manage Walking</a></li>
               </ul>
           </div>
         ";
    }

?>