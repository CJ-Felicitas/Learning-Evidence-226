<?php
use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8    ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <a href="/admin"><button class="btn btn-primary">Go Back</button></a>
            <h2>Job Requests</h2>
            <br>
            <table class="table">
                <thead>
                    <tr>
                   
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        
                    </tr>
                </thead>
                <?php
                $requests = DB::select('select * from jobrequests');
                  foreach ($requests as $req) {
                    echo " <tbody>
                                
                                <td>$req->name</td>
                                <td>$req->email</td>
                                <td>$req->phonenumber</td>
                                </tbody>
                                ";
                }
                ?>
            </table>
            <!--  -->
        </div>
    </div>
</body>
</html>