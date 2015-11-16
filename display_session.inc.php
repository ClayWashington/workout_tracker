<?php
    
    $workout_type = $_POST['session'];
    $test_system = $_POST['test'];

    if ($workout_type == 'cardio') {
        include('includes/enter_cardio.inc.php');    
    } else if ($workout_type == 'strength_training'){
          include('includes/enter_workout.inc.php');    
      }

    
    if ($test_system == 'cardio') {
        include('test/includes/enter_cardio.inc.php');    
    } else if ($test_system == 'strength_training'){
          include('test/includes/enter_workout.inc.php');    
      }



?>