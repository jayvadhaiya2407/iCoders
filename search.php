<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <title>Search Results</title>
</head>

<body>
    <?php
    require "partials/_dbconnect.php";
    include "partials/_header.php";
    ?>

    <div class="my-4" style="min-height:500px;">
    <?php
    $query = $_GET['query'];
    $query = str_replace("<","&lt;","$query");
    $query = str_replace(">","&gt;","$query");


    echo '<div class="jumbotron text-center">
            <h1 >Search For "'.$query.'"</h1>
        </div>';

    echo  '<div class="container">';
            $sql = "SELECT * FROM threads WHERE MATCH (thread_title, thread_desc) against ('.$query.')";
            $result = mysqli_query($conn, $sql);
            $noResults = true;
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['thread_id'];
                $title = $row['thread_title'];
                $desc = $row['thread_desc'];
                $noResults = false;

                echo '<div class="media my-4 border rounded-lg py-3 px-3">
                        <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
                        <div class="media-body">
                            <h5 class="mt-0">'.$title.'</h5>
                            <p>'.$desc.'</P>
                            <p class="my-2"><a href="thread_diss.php?threadid='.$id.'">Show</a></p>
                        </div>
                      </div>';
            }

            if($noResults){
                echo '<div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">No Results!</h4>
                        <hr>
                        <p>Sorry! No Results Found.</p>
                      </div>';
            }
            
     echo   '</div>
    </div>';
    ?>
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