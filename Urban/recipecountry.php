<?php
include './inc/nav.php';
 // jew
$get = $_GET["origin_id"];

$stmt = $db->prepare('SELECT * FROM recipes WHERE origin_id=:origin_id');
$stmt->bindValue(":origin_id", $_GET["origin_id"]);
$stmt->execute();

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
<div class='container'>
 <?php
$counter = 1;
$modulo = 0;
while ($recipes = $stmt->fetchObject()) {
    if ($modulo == 0 ) {
         echo '<div class="row">';
    }
    else {}
    ?>
    <div class='col s12 m4 forceheight' >
    <a href='recipe.php?recipe_id=<?php echo $recipes->recipe_id; ?>'><img class='responsive-img2' src='img/recipe/<?php echo $recipes->image; ?>' alt="<?php echo $recipes->title; ?>" /></a> <br>
    <a href='recipe.php?recipe_id=<?php echo $recipes->recipe_id; ?>' class='indigo-text text-darken-1'><b><?php echo $recipes->title; ?></b></a>
    <br><?php // echo $recipes->description; ?>
    <br><?php echo substr($recipes->description, 0, 150); ?>...
    <?php
    $counter = $counter + 1;
    $modulo = $counter%3; 

    ?>
    <hr>
    Price: <?php echo $recipes->price; ?> DKK<br>
  <br>
    Rating: <span class='orange-text text-darken-1'><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i></span>   </div>
    <?php 
    if ($modulo == 1 ) {
    echo '</div>';
    }
    else {}

}
?>
    </div> </div>
<?php
//2 select * from subcateg where pid whatever

?>



<?php
include './inc/footer.php';