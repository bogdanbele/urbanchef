<?php
include 'inc/nav.php';

$stmt = $db->query('SELECT * FROM recipes INNER JOIN origins ON recipes.origin_id = origins.origin_id ORDER BY origins.country');
$stmt->execute();
$tracer = "<hr>";
?> 



<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
        <div class='container'>
            <div class='row center'>
                <h4 class='header col s12 white-text'>Recipes</h4>
            </div>
        </div>
    </div>
    <div class='parallax'><img src='background10.jpg' alt='Unsplashed background img 2'></div>
</div>

<div class='container'>
    <br>







    <div class='row'>
        <?php
        while ($recipes = $stmt->fetchObject()) {
            ?>
            <div class='col s12 m4' >
                <a href='recipe.php?recipe_id=<?php echo $recipes->recipe_id; ?>'><img class='responsive-img' src='img/recipe/<?php echo $recipes->image; ?>' alt="<?php echo $recipes->title; ?>" /></a>
                <a href='recipe.php?recipe_id=<?php echo $recipes->recipe_id; ?>' class='indigo-text text-darken-1'><b><?php echo $recipes->title; ?></b></a>
                <br><?php // echo $recipes->description; ?>
                <br><?php echo substr($recipes->description, 0, 150); ?>...

                <hr>
                Price: <?php echo $recipes->price; ?> DKK<br>
                Origin: <a href='#' class='indigo-text text-darken-1'><?php echo $recipes->country; ?></a><br>
                Rating: <span class='orange-text text-darken-1'><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i></span>
            </div>
            <?php
        }
        ?>
    </div>





</div>

<?php
include 'inc/footer.php';












