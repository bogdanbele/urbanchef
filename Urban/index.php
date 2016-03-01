<?php
include './inc/nav.php';
?>

<div id='index-banner' class='parallax-container'>
    <div class='section no-pad-bot'>
        <div class='container'><br><br>
            <div class='center'><img src='img/logo.svg' alt='' class='topspace responsive-img'/></div>
             <!-- <h1 class='header center orange-text text-darken-1'>URBAN <span class='indigo-text text-darken-                     1'>CHEF</span></h1>-->

            <div class='row center'>
                <h5 class='header col s12 light white-text'>Book a cooking class at a chef's home</h5>
            </div>

            <div class='row center'>
                <a href='recipes.php' id='download-button' class='btn-large waves-               effect waves-light orange darken-1'>Browse recipes</a>
            </div>

            <br><br>

        </div>
    </div>

    <div class='parallax'><img src='background1.jpg' alt='Unsplashed background img 1'>
    </div>

</div>

<div class='container'>
    <div class='section'>
        <div class='row center'>
            <h5>Search for a specific dish</h5>

            <br>

            <nav>
                <div class='nav-wrapper'>
                    <form>
                        <div class='input-field indigo darken-1'>
                            <input id='search' type='search' required>
                            <label for='search'><i class='material-icons'>search</i></label>
                            <i class='material-icons'>close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
        <div class='container'>
            <div class='row center'>
                <h5 class='header col s12 black-text'>Learn to cook in a personal, cozy setting.</h5>
            </div>
        </div>
    </div>
    <div class='parallax'><img src='background2.jpg' alt='Unsplashed background img 2'></div>
</div>

<div class='container'>
    <div class='section'>

        <div class='row'>
            <div class='col s12 center'>

                <h4>Explore the world's cuisine</h4><br>

                <div class='row'>
                    <div class='col s12 m8'>
                        <a href='#'> <img class='responsive-img' src='img/japanese.jpg' /></a> 
                        <hr><a href='recipecountry.php?origin_id=85' class='black-text'>Japanese</a><hr>
                
                    </div>
                    <div class='col s12 m4'>
                        <a href='#'><img class='responsive-img' src='img/dutch.jpg' /></a>
                        <hr><a href='#' class='black-text'>Dutch</a><hr>
                    </div>
                </div>

                <div class='row'>
                    <div class='col s12 m4'>
                        <a href='#'><img class='responsive-img' src='img/romanian.jpg' /></a>
                        <hr><a href='#' class='black-text'>Romanian</a><hr>
                    </div>
                    <div class='col s12 m4'>
                        <a href='#'> <img class='responsive-img' src='img/chinese.jpg' /></a>
                        <hr><a href='#' class='black-text'>Chinese</a><hr>
                    </div>
                    <div class='col s12 m4'>
                        <a href='#'><img class='responsive-img' src='img/french.jpg' /></a>
                        <hr><a href='#' class='black-text'>French</a><hr>
                    </div>
                </div>

                <div class='row'>
                    <div class='col s12 m4'>
                        <a href='#'><img class='responsive-img' src='img/american.jpg' /></a>
                        <hr><a href='#' class='black-text'>American</a><hr>
                    </div>  
                    <div class='col s12 m8'>
                        <a href='#'> <img class='responsive-img' src='img/italian.jpg' /></a>
                        <hr><a href='#' class='black-text'>Italian</a><hr>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
        <div class='container'>
            <div class='row center'>
                <h5 class='header col s12 black-text'>Finally learn how to cook that traditional recipe.</h5>
            </div>
        </div>
    </div>
    <div class='parallax'><img src='background3.jpg' alt='Unsplashed background img 3'></div>
</div>



<?php
include './inc/footer.php';
