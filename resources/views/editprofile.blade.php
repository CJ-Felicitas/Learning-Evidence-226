<?php

use Illuminate\Support\Facades\DB; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/editprofile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- font-family: 'Rubik', sans-serif; -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body id="body">
    <div class="container-fluid">
        <div class="container" id="breadcrumb">
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
        </div>
    <div class="container" id="container">
        
        <div class="row" id="first-row">
            <div class="col-md-4" id="profile-side">
                <div id="profile-side-container">
                    <img src="<?php
                                $image =  DB::table('dir')->where('imagename', 'profilepicture')->first();
                                echo $image->imagepath;

                                ?>" class="img-thumbnail" alt="Profile Picture" width="304" height="236">

                    <h3><?php
                        $text =  DB::table('textcontents')->where('title', 'name')->first();
                        echo $text->content;
                        ?></h3>
                    
                </div>

            </div>

            <div class="col-md-8" id="statsside">
                <div id="stat-container">
                    <h4>Name: <?php
                                $text =  DB::table('textcontents')->where('title', 'name')->first();
                                echo $text->content;
                                ?> </h4>
                    <h4>Age: 15</h4>

                    <h4>Skills: <?php
                                $text =  DB::table('textcontents')->where('title', 'skillone')->first();
                                echo $text->content;
                                ?>, <?php
                                    $text =  DB::table('textcontents')->where('title', 'skilltwo')->first();
                                    echo $text->content;
                                    ?>, <?php
                                        $text =  DB::table('textcontents')->where('title', 'skillthree')->first();
                                        echo $text->content;
                                        ?>, <?php
                                            $text =  DB::table('textcontents')->where('title', 'skillfour')->first();
                                            echo $text->content;
                                            ?>, <?php
                                                $text =  DB::table('textcontents')->where('title', 'skillfive')->first();
                                                echo $text->content;
                                                ?>
                    </h4>
                    <br>
                    <h4>Social Media Accounts: </h4>
                    <h4><img src="images/github-icon-list.png" alt="" width="20px" height="20px" style="display: inline-block;"> : <?php $text = DB::table('textcontents')->where('title', 'socialmedialinkthree')->first();
                            echo  $text->content; ?></h4>
                    <h4><img src="images/facebook-icon-list.png" alt="" width="20px" height="20px" style="display: inline-block;"> :  <?php $text = DB::table('textcontents')->where('title', 'socialmedialinkone')->first();
                            echo  $text->content; ?> 
                </h4>
                <h4><img src="images/linkedin-icon-list.png" alt="" width="20px" height="20px" style="display: inline-block;"> :  <?php $text = DB::table('textcontents')->where('title', 'socialmedialinktwo')->first();
                            echo  $text->content; ?> 
                </h4>
                <br>
                    <h4 id="bio">Bio: <?php
                                $text =  DB::table('textcontents')->where('title', 'aboutme')->first();
                                echo $text->content;
                                ?>
                    </h4>
                    <br>
                    <button class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>


    </div>
    
    </div>
</body>

</html>