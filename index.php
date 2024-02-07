<?php
require_once 'classs.php';



  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
  /*
  $num=15;
  
  $test=new classs();
  
  $test->numclass=$num;
  
  
  echo $test->numclass;*/
  
  $myArr = array("Volvo",15,3,2);

// calling the function from the array item:

  $test=new classs();


echo $test->t;


  
  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
           
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
            </div>

        </div>
    </body>
</html>