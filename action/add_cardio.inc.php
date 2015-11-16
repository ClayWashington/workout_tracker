<?php

    require_once('library/Cardio.php');
    require_once('library/DataManager.php');

    $dm = new DataManager();

    $exercise = htmlspecialchars($_POST['exercise']);
    $time = htmlspecialchars($_POST['time']);
    $distance = htmlspecialchars($_POST['distance']);
    $level = htmlspecialchars($_POST['level']);
    $date = htmlspecialchars($_POST['date']);

    $cardio = new Cardio($exercise, $time, 
                         $distance, $level, 
                         $date             );

    $dm->save_cardio($cardio);

    echo "<a href=\"index.php?content=choose_session&&header=header_main\" >Add Another Workout</a>";

?>