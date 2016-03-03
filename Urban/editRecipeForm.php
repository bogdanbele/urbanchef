<?php
include './inc/nav.php';

$recipe_id = $_GET['recipe_id'];
//echo "Recipe_id : $recipe_id";
//$stmt = $db->prepare("SELECT * FROM recipes r, origins o WHERE r.recipe_id=:o.recipe_id");
$stmt = $db->prepare("SELECT * FROM recipes INNER JOIN origins ON origins.origin_id = recipes.origin_id WHERE recipe_id=:recipe_id");
$stmt->bindValue(":recipe_id", $recipe_id);
$stmt->execute();
//            while ($recipes = $stmt->fetchObject()) {
$recipes = $stmt->fetchObject();
?>
<!--***********-->
<!--EDIT RECIPE-->
<!--***********-->
<!--<div id = "modal6" class = "modal nav-login" style = "height: 100%">-->
<div class='container'>
    <div class='row center'>
        <h4 style="text-align: left;">Edit recipe</h4>
        <form method = "post" action = "actions/recipe/editRecipe.php" enctype = "multipart/form-data" >
            <?php
            ?>

            <p><input name = "recipe_id" type = "hidden" id = "recipe_id" value = "<?php echo $recipes->recipe_id; ?>"></p>

            <div class = "left">
                <p><label for = "title">Recipe Title:</label></p>
                <p> <input name = "title" type = "text" id = "title" value="<?php echo $recipes->title; ?>"/></p>

                <p><label for = "description">Description:</label></p>
                <p><textarea style="height: 300px" name = "description" rows = "40" cols = "60"><?php echo $recipes->description; ?></textarea> </p>

                <p><label for = "cooktime">Cook time:</label></p>
                <p>In minutes: <input name = "cooktime" type = "text" id = "cooktime" value="<?php echo $recipes->cooktime; ?>"/></p>

                <p><label for = "price">Total cost price</label></p>
                <p><input name = "price" type = "text" id = "price" value="<?php echo $recipes->price; ?>"/>DKK</p>

                <p><label for = "image">Select a new image</label></p>
                <p><label for = "image">Upload an image of the dish:</label></p>
                <p><input type = "file" name = "image"/></p>
                <img style="width: 400px;" src="img/recipe/<?php echo $recipes->image ?>" alt="<?php echo $recipes->title ?> image">

                <p><label for = "origin_id">Select the country that the dish originates from: </label></p>
                <p>
                    <select name = "origin_id" style = "display: block;">
                        <!--****************** -->
                        <!--RETRIEVE COUNTRIES-->
                        <!--****************** -->
                        <?php
                        $stmt = $db->prepare("SELECT * FROM origins ORDER BY country ASC");
//                                        $stmt->bindValue();
                        $stmt->execute();
                        while ($country = $stmt->fetchObject()) {
                            ?>
                            <option value="<?php echo $country->origin_id ?>"><?php echo $country->country ?></option>

                            <?php
                        }
                        ?>
                        <option selected value="<?php echo $recipes->origin_id ?>"><?php echo $recipes->country ?></option>

                    </select>
                </p>
                <input type='submit' name='submit' value='Publish Recipe'>

            </div>
            <?php
//            }
            ?>
        </form>
    </div>
</div>
<?php
include './inc/footer.php';
?>