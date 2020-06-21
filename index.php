<?php
require "partials/_dbconnect.php";
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css" type="text/css">
    <title>Welcome -iSolutios Forum</title>
</head>

<body>
    <?php include "partials/_header.php"?>
    <div class="main img-fluit">
        <div class="btn-align">
            <h5 class="text">Welcome</h5>
            <h1 class="text">iCoders -The Coding Forum</h1>
            <h6 class="text">Let's Crack The Error</h6>
            <a href="#categories" class="btn btn-outline-light btn-md" role="button" aria-pressed="true">Begin Now</a>
        </div>
    </div>

    <div class="main-container" style="background-color: #e9ecef;">
        <h1 class="text-center py-4" id="categories">Categories</h1>
        <div class="container">
            <div class="row">

                <?php
                    $sql = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                        $cid = $row['category_id'];
                        $cat = $row['category_nme'];
                        $desc = $row['category_desc'];

                        echo '<div class="col-md-4 my-2">
                        <div class="card mb-4 shadow-sm">
                             <img src="images/card-'.$cid.'.png" alt="img" style="margin:  20px auto; width:200px; height:200px" class="img-fluid">
                        <div class="card-body">
                            <h4>'.$cat.'</h4>
                            <p class="card-text">'. substr($desc, 0, 255).'.....</p>
                        </div>
                        <div>
                        
                        </div>
                    </div>
                </div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <?php
        include "partials/_footer.php";
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>