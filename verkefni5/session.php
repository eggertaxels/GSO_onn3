<?php
    $error = '';
    if (isset($_POST['login'])) {
        session_start();
        if ($_POST["username"] == "admin" && $_POST["pwd"] == "1234") {
            $_SESSION['authenticated'] = 'Jethro Tull';
            session_regenerate_id();
            if (isset($_SESSION['authenticated'])) {
                header('Location: http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/index.php');
                exit;
            }
        }
        else{
            $error = 'rangt lykilord';
        }
    }
?>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <h4 class = "form-signin-heading"><?php echo $error; ?></h4>
                <p>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" placeholder="admin">
                 </p>
                 <p>
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd" id="pwd" placeholder="1234">
                 </p>
                 <p>
                    <input name="login" type="submit" value="Log in">
                 </p>
            </fieldset>  
        </form>
    </body>
</html>