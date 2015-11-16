<?php

    require_once('library/Cardio.php');
    require_once('library/DataManager.php');

    $dm = new DataManager();

    $cardio_id = $_POST['id'];
    $exercise = htmlspecialchars($_POST['exercise']);
    $time = htmlspecialchars($_POST['time']);
    $distance = htmlspecialchars($_POST['distance']);
    $level = htmlspecialchars($_POST['level']);
    $date = htmlspecialchars($_POST['date']);

    $cardio = new Cardio($exercise, $time, $distance, 
                         $level, $date               );
    $cardio->set_cardio_id($cardio_id);
    $dm->update_cardio($cardio);

?>