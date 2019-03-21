<?php
session_start();
$userinfo = array(
    'user'=>'5d41402abc4b2a76b9719d911017c592', //Hello...
);

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}
if(isset($_POST['username'])) {
    if ($userinfo[$_POST['username']] == md5($_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
    } else {
        header("location:index2.php"); //replace with index2
    }
}
?>
<?php if($_SESSION['username']): ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Login form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="style3.css"

    <?php else: ?>
    <html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="style3.css"
    </head>
    <body>
    <div class="box"></div>
    <h1>Please login or register</h1>
    <div class="container">
    <div class="row">
        <div class="column">
            <div class="card" style="height:440px">
            <h2><form name="login" action="" method="post"></h2>
                <h3>Username:</h3>
                    <input name="username" type="text" id="username"></input>
                <h3>Password:</h3>
                    <input name="password" type="password" id="password"></input>
                <p>
                </p>
                <input type="submit" name="Submit" value="Login" class="button">
                <p class="terms">By logging in, You agree to our terms of service and privacy policy</p>
            </div>
        </div>
        <div class="column">
            <div class="card" style="height:440px">

                <form action='display.php' method='POST'>
                    <h3>Your full name</h3>
                        <input type='text' name='fullname' value='<?php echo $fullname; ?>'
                    <p>
                    </p>
                    <h3>Choose a username</h3>
                        <input type='text' name='username' value='<?php echo $username; ?>'
                    <p>
                    </p>
                    <h3>Choose a password</h3>
                        <input type='password' name='password'>
                    <h3>Repeat your password</h3>
                        <input type='password' name='repeatpassword'>

                        <input type="button" class="button2" value="Submit datas" onclick="alert('Thank You for registration!')">

                        <input type="submit" name="submit" value="Register" class="button">
            </div>
    </body>
    </html>
<?php endif; ?>



