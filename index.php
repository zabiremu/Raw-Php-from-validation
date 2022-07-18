<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    if(isset($_SESSION['success'])){

    ?>    
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Facebook</strong>
            <small>Now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?=$_SESSION['success'] ?>
        </div>
    </div>
    <?php
    };
    ?>
    <!--  notification section start-->
    
    <!--  notification section end  -->
    <!-- from start here -->
    <section class="card col-lg-5 mx-auto my-5">
        <div class="card-body">
            <h2 class="card-title">
                Please Log-in
            </h2>
            <form action="./form_valid.php" method="POST">
                <input class="form-control my-3" type="text" placeholder="enter your email address" name="email">
                <span class="text-danger">
                    <?php
                    if (isset($_SESSION['error_email'])) {
                        echo $_SESSION['error_email'];
                    }elseif(isset($_SESSION['email_error'])){
                        echo $_SESSION['email_error'];
                    }
                    ?>
                </span>
                <input class="form-control my-3" type="text" placeholder="enter your password" name="password">
                <span class="text-danger d-block">
                    <?php
                    if (isset($_SESSION['error_password'])) {
                        echo $_SESSION['error_password'];
                    }elseif(isset( $_SESSION['password_error'])){
                        echo  $_SESSION['password_error'];
                    }
                    ?>
                </span>
                <button class="btn btn-danger mt-3" name="submit">sign up</button>
            </form>
        </div>
    </section>
    <!-- from end here -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
<?php
session_unset();
?>