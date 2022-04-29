<?php
use Illuminate\Support\Facades\DB;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .thumbnail{
            border: 0px solid transparent;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container" style="margin-top: 80px;">
            <h1 style="text-align: center;">Control Panel</h1>
            <br>
            <div class="row" >
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/viewrequest">
        <img src="images/jobreq-logo.png" alt="jobrequest" style="width:60%">
        <div class="caption" style="text-align: center;">
          <p>Job Requests</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/editprofile">
        <img src="images/profile-logo.png" alt="edit profile" style="width:60%">
        <div class="caption" style="text-align: center;">
          <p>Edit Profile</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/editskills">
        <img src="images/skills-logo.png" alt="skills logo" style="width:60%">
        <div class="caption" style="text-align: center;">
          <p>Edit Skills</p>
        </div>
      </a>
    </div>
  </div>
</div>
        </div>
    </div>
</body>

</html>