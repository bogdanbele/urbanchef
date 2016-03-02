
<?php
include 'actions/db.php';
//include 'actions/checked_logged_in.php';
if (isset($_SESSION["user_id"])) {
$user_id = $_SESSION["user_id"];
}
$error = "Email or Password is invalid";
//echo $user_id =$_SESSION["user_id"];
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no'/>
        <title>Urban Chef</title>
        <meta name='description' content='Here comes the site description.' />
        <meta name='keywords' content='' />
        <meta name='author' content='Our group name' />
        <!-- only for the development -->
        <meta http-equiv='pragma' content='no-cache' />

        <!-- CSS  -->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <link href='css/materialize.css' type='text/css' rel='stylesheet' media='screen,projection'/>
        <link href='css/style.css' type='text/css' rel='stylesheet' media='screen,projection'/>
        <link rel='icon' type='image/x-icon' href='img/favicon.ico' />
        <script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js'></script>
    </head>

    <body>
        <nav class='white' role='navigation'>
            <div class='nav-wrapper container'>
                <div id='logo-container'  class='brand-logo orange-text text-darken-1'>
                    <a href='index.php'> <img src='img/logo.svg' alt='' class='header-logo'/></a>
                    <div id='login'>
                        <form action='index.php' method='post'>
                            <label>UserName :</label>
                            <input id='name' name='email' placeholder='username' type='text'>
                            <label>Password :</label>
                            <input id='password' name='password' placeholder='**********' type='password'>
                            <input name='submit' type='submit' value=' Login '>
                            <span><?php echo $error; ?></span>
                        </form>


                    </div>
                            <!--Urban <span class='indigo-text         text-darken-1'>Chef</span>-->
                </div>
                <ul class='right hide-on-med-and-down'>
                    <li>                     
                        <!--**********-->
                        <!--MATTS CODE-->
                        <!--**********-->
                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">
                            <?php
                            if (!isset($_SESSION["user_id"])) {
                                ?>
                                Login
                                <?php
                            } else {
                                ?>
                                Options
                                <?php
                            }
                            ?>
                        </a>

                        <!--<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Logout</a>-->
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">

                            <?php
                            if (!isset($_SESSION["user_id"])) {
                                ?>
                                <form action="actions/login.php" method="post" class="col s12 nav-login">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <label for="email">Email</label>

                                            <input id="email" type="email" name="email" class="validate">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="password" type="password" name="password" class="validate">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <form action="actions/logout.php" method="post" class="col s12 nav-login">

                                            <div class="input-field col s6">
                                                <input id="submit" type="submit" class="validate" value="Login">
                                                <!--<label for="password">Password</label>-->
                                            </div>
                                        </form>
                                    </div>
                                </form>
                                <?php
                            } else {
                                ?>


                                <!--<a class="waves-effect waves-light btn modal-trigger" href="#modal3">-->
                                <!-- Modal Trigger -->
                                <a class="waves-effect waves-light btn modal-trigger" href="./myrecipes.php">My Recipes</a>

                                <a class="waves-effect waves-light btn modal-trigger" href="actions/logout.php">Logout</a>
                                <!--                                <form action="actions/logout.php" method="post"  class="col s12 nav-login">
                                                                    <div class="row">
                                                                        <div class="input-field col s6">
                                                                            <input id="submit" type="submit" class="validate" value="Logout">
                                                                            <label for="password">Password</label>
                                                                        </div>
                                                                    </div>
                                                                </form>-->
                                <?php
                            }
                            ?>
                        </div>
                    </li>
                    <!--**********-->
                    <!--MATTS CODE-->
                    <!--**********-->
                    <li>                     
                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Register</a>
                        <!-- Modal Structure -->
                        <div id="modal2" class="modal nav-login">
                            <form class="col s12 nav-login">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" name="email" class="validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="password" type="password" name="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <label for="fname">First Name: </label>
                                        <input id="fname" type="email" name="fname" class="validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <label for="lname">Last Name: </label>
                                        <input id="fname" type="email" name="lname" class="validate">
                                    </div>
                                </div>

                                <div class="row file-field input-field">
                                    <div class="btn">
                                        <span>Profile Image</span>
                                        <input type="file" name="image">
                                    </div>
                                    <!--                                    <div class="file-path-wrapper">
                                                                            <input class="file-path validate" type="text">
                                                                        </div>-->
                                    <br>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="submit" type="submit" class="validate" value="Login">
                                            <!--<label for="password">Password</label>-->
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </li>
                    <li><a href='register.php'>Register</a></li>
                    <li><a href='?page=help'>Help</a></li>
                </ul>

                <!--                <ul id='nav-mobile' class='side-nav'>
                                    <li><a id='loginButton' href='#'>Login</a></li>
                                    <li><a href='register.php'>Register</a></li>
                                    <li><a href='?page=help'>Help</a></li>
                                </ul>-->
                <a href='#' data-activates='nav-mobile' class='button-collapse'><i class='material-icons black-text'>menu</i>
                </a>

            </div>
        </nav>