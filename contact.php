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

    <title>Contact -iCoders</title>
</head>

<body>
<?php
include "partials/_header.php";
?>

<?php
$sent = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $to = "jayvadhaiya2002@gmail.com";
    $subject = "Contact From iCoders";
    $message = "Name :- ".$name."\nEmail :- ".$email."\nAddress :-".$address1."\n".$address2."\nCity :- ".$city."\nState :- ".$state."\nZip :- ".$zip.".";

    if(mail($to, $subject, $message)){
        $sent = true;
    }
}
?>
    <div class="container">
        <form style="padding-top: 100px;" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST">
        <?php
            if($sent){
                echo '<div class="alert alert-success" role="alert">
                Thank You For Contacting Us. We Will Contact You Soon.
              </div>';
            }
        ?>
            <h1 class="my-4">Contact Us</h1>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor" name="address2">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">State</label>
                    <input type="text" class="form-control" id="inputCity" name="state">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </form>
    </div>
    <?php include "partials/_footer.php"; ?>
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