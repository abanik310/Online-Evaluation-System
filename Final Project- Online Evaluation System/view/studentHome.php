<?php
session_start();
if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "student") {
  include_once "partials/navbar.php";
  include_once "partials/studentSidebar.php";
} else
  header('Location: index.php');
include_once "../controller/count.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Home | <?php if (isset($_SESSION["name"])) echo $_SESSION["name"] ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../script//script.js"></script>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="w3-light-grey">
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  <div class="w3-main">
    <header class=" w3-container" style="padding-top:22px">
      <h5><b><i class="fa fa-dashboard"></i>Courses</b></h5>
    </header>
    <div class="w3-quarter">
      <div class="w3-container w3-dark-grey w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $teacherCnt ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Teacher</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-diamond w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $courseCount ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Courses</h4>
      </div>
    </div>
  </div>
</body>

</html>