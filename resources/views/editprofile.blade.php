<?php

use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/editprofile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row" id="first-row">
            <div class="col-md-4" id="profile-side">
                <div id="profile-side-container">
                    <img src="<?php
                                $image =  DB::table('dir')->where('imagename', 'profilepicture')->first();
                                echo $image->imagepath;

                                ?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">

                    <h4><?php
                        $text =  DB::table('textcontents')->where('title', 'name')->first();
                        echo $text->content;

                        ?></h4>
                </div>

            </div>

            <div class="col-md-8" id="statsside">
                <div id="stat-container">
                    <h5>Name: <?php
                                $text =  DB::table('textcontents')->where('title', 'name')->first();
                                echo $text->content;
                                ?> </h5><br>
                                <h5>
                                    
                                </h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>