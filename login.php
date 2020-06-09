<?php
/********
 * filename: login.php
 * author:
 * description:
 */

 include("assets/classes/UserData.php");

// dummy credentials for now
$email = "your@email.com";
$password = "drowssap";


// instantiate the new UserData Object, with default data. 
$userData = new UserData();
// instantiate the new UserData Object, with custom data
//$userData = new UserData("John", "Johnson", "123 Johnson Street, Johnson, WI, 04911", "assets/images/user-profile-image.jpg");

//var_dump($_POST);
echo "<pre>";
var_dump($userData);
echo "</pre>";

// if there's an 'email' index in the $_POST array
if (isset($_POST["email"])) {

    // and that email matches our user email and password
    if ($_POST["email"] == $email && $_POST["password"] == $password) {

        session_start();    // start the session, 

        // assign the login email to the session super global
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["userData"] = $userData;

        // redirect the user to the user page
        // note: header changes must happen before any HTML 
        header("Location: user.php");
        die();  // this will mop up any previously running php processes on this page. it's a good practice.
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">

        <h1>Login Page</h1>

        <form id="login" action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php

        // if the user credentials don't match up, put out an alert message
        if (isset($_POST["email"]) && $_POST["email"] != $email) {

            echo '
                <div class="alert alert-danger" role="alert">
                Your login credentials are not correct
                </div>
                ';
        }
        ?>

    </div><!-- /.container-fluid -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>