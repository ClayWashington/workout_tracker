<?php

    require_once('library/Workout.php');
    require_once('library/DataManager.php');

    $dm = new DataManager();

    $time = htmlspecialchars($_POST['time']); 
    $date = htmlspecialchars($_POST['date']);   

    $workout = new Workout($time, $date);
    $w_id = $dm->save_workout_meta($workout);
    
    echo "<a href=\"index.php?content=includes/enter_exercise&&header=header&&w_id=$w_id\" >Add Exercise</a>";


?>