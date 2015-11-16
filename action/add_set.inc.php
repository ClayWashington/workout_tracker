<?php

    require_once('library/Set.php');
    require_once('library/DataManager.php');

    $dm = new DataManager();

    $reps = htmlspecialchars($_POST['reps']);
    $weight = htmlspecialchars($_POST['weight']);
    $w_id = $_POST['w_id'];
    $e_id = $_POST['e_id'];

    
    $set = new Set($reps, $weight);
    $dm->save_set($e_id, $set);

    echo "<a href=\"index.php?content=includes/enter_set&&header=header&&w_id=$w_id&&e_id=$e_id\" >Add Another Set</a><br><br>";

    echo "<a href=\"index.php?content=includes/enter_exercise&&header=header&&w_id=$w_id&&e_id=$e_id\" >Add Another Exercise</a><br><br>";

    echo "<a href=\"index.php?content=choose_session&&header=header\" >Finished</a>";








?>