<?php
include './inc/nav.php';
 // jew
$get = $_GET["origin_id"];
$pointer = $db->query('SELECT * FROM recipes INNER JOIN origins ON recipes.origin_id = origins.origin_id ORDER BY origins.country');
$pointer->bindValue(":origin_id", $get);
$pointer->execute();

echo 'jew';
while($recipes=$pointer->fetchObject()){
 ?>

 <div class='col s12 m4' >S
            <a href='recipe.php?recipe_id=<?php echo $recipes->recipe_id; ?>'><img style="width: 200px;" class='responsive-img' src='img/recipe/<?php echo $recipes->image; ?>' alt="<?php echo $recipes->title; ?> imge" /></a>
           <a href='recipe.php?recipe_id=<?php echo $recipes->recipe_id; ?>' class='indigo-text text-darken-1'><b> <?php echo $recipes->title; ?></b></a>
            <br>  <?php echo $recipes->description; ?>
            <hr>
            Price: <?php echo $recipes->price; ?> DKK<br>
            Origin: <a href='#' class='indigo-text text-darken-1'><?php echo $recipes->country; ?></a><br>
            Rating: <span class='orange-text text-darken-1'><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i></span>
        </div>

<?php
}

?>
</div>
<?php
//2 select * from subcateg where pid whatever

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


<?php
include './inc/footer.php';