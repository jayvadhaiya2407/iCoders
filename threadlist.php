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
    <title>ThreadList -iCoders</title>
</head>

<body>
    <?php 
        require "partials/_dbconnect.php";
        include "partials/_header.php";
        // session_start();
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
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $thread_title = $_POST['title'];
            $thread_desc = $_POST['thread_desc'];

            $thread_title = str_replace("<","&lt;","$thread_title");
            $thread_title = str_replace(">","&gt;","$thread_title");
            $thread_desc = str_replace("<","&lt;","$thread_desc");
            $thread_desc = str_replace(">","&gt;","$thread_desc");

            $thread_cat_id = $cat_id;
            $user_id = $_SESSION['user_id'];

            $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `user_id`, `thread_time`) VALUES ('$thread_title', '$thread_desc', '$thread_cat_id', '$user_id', current_timestamp())";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your Thread Has Been Posted.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erroe!</strong> Unable To Post A Thread.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

        }
    ?>

    <?php
    if(isset($_SESSION['login']) && $_SESSION['login']==true){
        echo '<h2 class="text-center">Ask A Question</h2>
        <form action="'.$_SERVER['REQUEST_URI'].'" method="POST">
            <div class="form-group">
                <label for="title">Thread Title</label>
                <input type="text" class="form-control" id="title" name="title" require>
            </div>
            <div>
                <li>Please Try To Make Question Titile Short As Possible.</li>
            </div>
            <div class="form-group">
                <label for="thread_desc">Thread Description</label>
                <textarea class="form-control" id="thread_desc" rows="3" name="thread_desc"></textarea>
            </div>
            <input type="submit" value="Post" class="btn btn-outline-success btn-md">
        </form>
    </div>';
    }else{
        echo '<div class="alert alert-warning fade show" role="alert">
                <strong>Warning!</strong> You are not loged in. Login to post a thread or question.
              </div>';
    }
    ?>
</div>

        <div class="container" style="min-height: 700px">
            <h2 class="text-center py-3">Questions/Threads</h2>

            <?php
            $thread_cat_id = $cat_id;
            // $sql = "SELECT * FROM threads WHERE thread_cat_id='$thread_cat_id'";
            $sql = "SELECT * FROM threads WHERE thread_cat_id='$thread_cat_id' ORDER BY thread_id DESC LIMIT 10";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $thread_id = $row['thread_id'];
                $thread_title = $row['thread_title'];
                $thread_desc = $row['thread_desc'];

                $user_id = $row['user_id'];

                $sql2 = "SELECT username FROM users066247 WHERE srno='$user_id'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $username = $row2['username'];

                echo '<div class="media my-4 border rounded-lg py-3 px-3">
                <img src="images/user.png" class="mr-3 img-fluid" alt="userlogo" style="width:33px; height:33px">
                <div class="media-body">
                    <h5 class="mt-0">'.$thread_title.'</h5>(Posted By :- <b>'.$username.'</b>)
                    <p>'.$thread_desc.'</P>
                    <p class="my-2"><a href="thread_diss.php?threadid='.$thread_id.'">Discuss</a></p>
                </div>
            </div>';
            }

            if($noResult){
                echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">No Results Found!</h4>
                <p>Be A First Person To Ask The Question.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use our iCoders forum.</p>
              </div>';
            }
        ?>
        </div>

        <?php include "partials/_footer.php"?>

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