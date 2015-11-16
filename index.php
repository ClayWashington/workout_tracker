<!DOCTYPE html>

<head>
	<title>Workout Tracker</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel = "stylesheet" type = "text/css" href = "style.css" />
     
</head>

<body>
  
    </div><!--close header-->
    <div id="main"> 
       <?php
         if(!isset($_REQUEST['content'])) {
          include("header_main.inc.php");
          include("main.inc.php");
        }
        else { 
           $content = $_REQUEST['content'];
           $nextpage = $content . ".inc.php";
           include("header.inc.php");
           include($nextpage);
        }
    ?>           
    </div><!-- close main -->

</body>
</html>