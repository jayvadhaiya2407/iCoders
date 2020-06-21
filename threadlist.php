<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>ThreadList -iCoders</title>
</head>

<body>
    <?php 
        include "partials/_header.php";
        require "partials/_dbconnect.php";
    ?>

    <?php 
        $cat_id = $_GET['catid'];
        $sql = "SELECT * FROM `categories` WHERE category_id=$cat_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $cat_name = $row['category_name'];
        $cat_desc = $row['category_desc'];

        echo '
        <div class="jumbotron my-4">
        <h2 class="display-4">'.$cat_name.'</h2>
            <p class="lead">'.$cat_desc.'...</p>
            <hr class="my-4">
        <h4>Rules</h4>
            <li>No Spam / Advertising / Self-promote in the forums.</li>
            <li>Do not post copyright-infringing material.</li>
            <li>DO NOT ASK for email addresses or phone numbers.</li>
            <li>Remain respectful of other members at all times.</li>
        </div>';    
    ?>


    <div class="container">
        <h2 class="text-center py-3">Questions/Threads</h2>
        <div class="media my-4 border rounded-lg py-3 px-3">
            <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
            <div>
            <p><a href="#">Discuss</a></p>
            </div>
        </div>

        <div class="media my-4 border rounded-lg py-3 px-3">
            <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div><div class="media my-4 border rounded-lg py-3 px-3">
            <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div><div class="media my-4 border rounded-lg py-3 px-3">
            <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div><div class="media my-4 border rounded-lg py-3 px-3">
            <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
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