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

    <title>Thread -Discussion</title>
</head>

<body>
    <?php include "partials/_header.php";?>

    <?php 
        $thread_id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE thread_id='$thread_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $thread_title = $row['thread_title'];
        $thread_desc = $row['thread_desc'];

        echo '
        <div class="jumbotron my-4">
        <h2 class="display-4">'.$thread_title.'</h2>
            <hr class="my-4">
            <p class="lead">'.$thread_desc.'...</p>
        </div>'; 
        
    ?>

    <div class="container">
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $thread_id = $_GET['threadid'];
            $reply_desc = $_POST['reply'];
            $reply_by = $_SESSION['user_id'];

            $sql = "INSERT INTO `replies` (`reply_desc`, `thread_id`, `reply_by`, `reply_time`) VALUES ('$reply_desc', '$thread_id', '$reply_by', current_timestamp())";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your Reply Has Been Posted.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erroe!</strong> Unable To Post A Reply.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

        }
    ?>
        <h2 class="text-center">Post A Reply</h2>

    <?php

    if(isset($_SESSION['login']) && $_SESSION['login']==true){
        echo '<form action="'. $_SERVER["REQUEST_URI"] .'" method="POST">
            <div class="form-group">
                <label for="reply">Reply Your Suggesion</label>
                <textarea class="form-control" id="reply" rows="3" name="reply"></textarea>
            </div>
            <input type="submit" value="Reply" class="btn btn-outline-success btn-md">
        </form>
    </div>';
    }else{
        echo '<div class="alert alert-warning fade show" role="alert">
                <strong>Warning!</strong> You are not loged in. Login to reply a thread or question.
              </div>';
    }
    ?>

    <div class="container" style="min-height: 700px">
        <h2 class="text-center py-3">Replies</h2>

        <?php
            $thread_id = $_GET['threadid'];
            $sql = "SELECT * FROM replies WHERE thread_id='$thread_id'";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $reply_id = $row['reply_id'];
                $reply_desc = $row['reply_desc'];
                $reply_by = $row['reply_by'];

                $sql2 = "SELECT username FROM users066247 WHERE srno='$reply_by'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $username = $row2['username'];

                echo '<div class="media my-4 border rounded-lg py-3 px-3">
                <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
                <div class="media-body">
                    <h5 class="mt-0">'.$username.'</h5>
                    <p>'.$reply_desc.'</P>
                </div>
            </div>';
            }

            if($noResult){
                echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">No Replies Found!</h4>
                <p>Be A First Person To reply To The Question.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use our iCoders forum.</p>
              </div>';
            }
        ?>
    </div>


    <?php  include "partials/_footer.php";?>
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