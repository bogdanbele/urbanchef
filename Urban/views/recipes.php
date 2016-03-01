<?php
include '../inc/nav.php';

$stmt = $db->query('SELECT  * FROM recipes INNER JOIN origins ON recipes.origin_id = origins.origin_id ORDER BY origins.country');
$stmt->execute();
$tracer = "<hr>";
?> 
<div class='row'>
    <?php
    while ($recipes = $stmt->fetchObject()) {
        ?>
        <div class='col s12 m4'>
            <a href='?page=recipe?=recipe_id=<?php echo $recipes->recipe_id ?>'><img style="width: 200px;" class='responsive-img' src='img/recipe/<?php echo $recipes->image; ?>' alt="<?php echo $recipes->title; ?> imge" /></a>
            <a href='?page=recipe' class='indigo-text text-darken-1'><b> <?php echo $recipes->title; ?></b></a>
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
//$recipeTitle = ;
//$stmt->execute();
$title = "Recipes";
$script = "
    ";
$content = " 

        <div class='row'>
            <div class='col s12 m4'>
                <a href='#'><img class='responsive-img' src='img/recipe.jpg' /></a>
                <a href='#' class='indigo-text text-darken-1'><b>Title</b></a>
                <br>Short description
                <hr>
                Price: 200 DKK<br>
                Origin <a href='#' class='indigo-text text-darken-1'>Country</a><br>
                Rating <span class='orange-text text-darken-1'><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i></span>
            </div>
            <div class='col s12 m4'>
                <a href='#'> <img class='responsive-img' src='img/recipe.jpg' /></a>
                <a href='#' class='indigo-text text-darken-1'><b>Title</b></a>
                <br>Short description
                <hr>
                Price: 200 DKK<br>
                Origin <a href='#' class='indigo-text text-darken-1'>Country</a><br>
                Rating <span class='orange-text text-darken-1'><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i></span>
            </div>
            <div class='col s12 m4'>
                <a href='#'><img class='responsive-img' src='img/recipe.jpg' /></a>
                <a href='#' class='indigo-text text-darken-1'><b>Title</b></a>
                <br>Short description
                <hr>
                Price: 200 DKK<br>
                Origin <a href='#' class='indigo-text text-darken-1'>Country</a><br>
                Rating <span class='orange-text text-darken-1'><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i></span>
            </div>
        </div>
    </div>
    <?php
    "
;

//return $content;
