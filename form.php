<?php
    require_once './database.php';

    $message = "";

    if($_POST){

        if(isset($_POST["login"])){

            $user = $database->select("tb_users","*",[
                "usr"=> $_POST["username"]
            ]);

            if(count($user) > 0){
                //validate password
                if(password_verify($_POST["password"], $user[0]["pwd"])){
                    session_start();
                    $_SESSION["isLoggedIn"] = true;
                    $_SESSION["fullname"] = $user[0]["fullname"];
                    header("location: home.php");
                }else{
                    $message = "wrong username or password";
                }
            }else{
                $message = "wrong username or password";
            }

            //validate if user already logged in
            //
            //if(isset($_SESSION["isLoggedIn"])){
                //header("location: book.php?id=".$_POST["login"]);
            //}else{
                //validate login
                //echo "validate login: ".$_POST["login"];
            //}
        }

        if(isset($_POST["register"])){
            //validate if user already registered
            $validateUsername = $database->select("tb_users","*",[
                "usr"=>$_POST["username"]
            ]);

            if(count($validateUsername) > 0){
                $message = "This username is already registered";
            }else{
                $pass = password_hash($_POST["password"], PASSWORD_DEFAULT, ['cost => 12']);
                $database->insert("tb_users",[
                    "fullname"=> $_POST["fullname"],
                    "usr"=> $_POST["username"],
                    "pwd"=> $pass,
                    "email"=> $_POST["email"]
                ]);

                //header("location: book.php?id=".$_POST["register"]);
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing-Up</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php
        include "./parts/header.php";
    ?>
    <main class="access-main-container">
        <div class="form-container">
            <h2 class="form-title">New Account</h2>
                
                <section class='activity'>
                    <h3 class='login-title'>Sign In</h3>
                    <p class='login-text'>Complete the registration process to enjoy our destinations.</p>
                    <form method="post" action="form.php">
                        <div class='form-items'>
                            <div>
                                <label class='form-label destination-extra' for='fullname'>Fullname</label>
                            </div>
                            <div class="form-input-container">
                                <input id='fullname' class='form-input' type='text' name='fullname'>
                            </div>
                        </div>
                        <div class='form-items'>
                            <div>
                                <label class='form-label destination-extra' for='email'>Email Address</label>
                            </div>
                            <div class="form-input-container">
                                <input id='email' class='form-input' type='text' name='email'>
                            </div>
                        </div>
                        <div class='form-items'>
                            <div>
                                <label class='form-label destination-extra' for='username'>Username</label>
                            </div>
                            <div class="form-input-container">
                                <input id='username' class='form-input' type='text' name='username'>
                            </div>
                        </div>
                        <div class='form-items'>
                            <div>
                                <label class='form-label destination-extra' for='password'>Password</label>
                            </div>
                            <div class="form-input-container">
                                <input id='password' class='form-input' type='password' name='password'>
                            </div>
                        </div>
                        <div class='form-items'>
                            <div>
                                <input class='form-input login-btn' type='submit' value="REGISTER">
                            </div>
                        </div>
                        <p><?php echo $message; ?></p>
                        <input type="hidden" name="register" value="1">
                    </form>
            </div>
            <div class="form-container">
            <h3 class='login-title'>Login</h3>
            <p class='login-text'>Enter your registered username and password in the designated fields.</p>
            <form method="post" action="form.php">
                        <div class='form-items'>
                            <div>
                                <label class='form-label destination-extra' for='username'>Username</label>
                            </div>
                            <div class="form-input-container">
                                <input id='username' class='form-input' type='text' name='username'>
                            </div>
                        </div>
                        <div class='form-items'>
                            <div>
                                <label class='form-label destination-extra' for='password'>Password</label>
                            </div>
                            <div class="form-input-container">
                                <input id='password' class='form-input' type='password' name='password'>
                            </div>
                        </div>
                        <div class='form-items'>
                            <div>
                                <input class='form-input login-btn' type='submit' value="LOGIN">
                            </div>
                        </div>
                        <input type="hidden" name="login" value="1">
                </form>
            </div>
                    
        
    </main>
</body>
</html>