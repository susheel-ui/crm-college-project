<?php
   include('session.php');
?>
<html">
   <head>
      <title>Welcome </title>
   </head>
   <body>
      <h1>Welcome <?php echo $actype; ?></h1> 
      <h1>your name is <?php echo $name?></h1>
      <h1>your sno is <?php echo $sno?></h1>
      <?php
      if($actype == "user"){
        header("location:Dashboard_user.php");
    }
    elseif($actype =="admin"){
        header("location:Dashboard_admin.php");
    }
    elseif($actype =="service"){
        header("location:Dashboard_service.php");

    }
      ?>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
</html>