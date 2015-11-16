<?php

    require_once('library/Exercise.php');
    require_once('library/Workout.php');
    require_once('library/DataManager.php');

    $dm = new DataManager();

    $w_id = $_POST['w_id'];
    $exercise_name = htmlspecialchars($_POST['exercise_name']);

    $exercise = new Exercise($exercise_name);
    $e_id = $dm->save_exercise_meta($w_id, $exercise);

    echo "<a href=\"index.php?content=includes/enter_set&&header=header&&w_id=$w_id&&e_id=$e_id\" >Add Set</a>";



    


?>