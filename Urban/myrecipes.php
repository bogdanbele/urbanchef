<?php
include './inc/nav.php';
include ("actions/checked_logged_in.php");
//    Added My Recipes
//   ** -listing my recipes
//    -add recipe's
//    -add review's
//    -add checklogged include check logged in (works) 
?>

<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
        <div class='container'>
            <div class='row center'>
                <h4 class='header col s12 black-text'>My recipes</h4>
            </div>
        </div>
    </div>
    <div class='parallax'><img src='background11.jpg' alt='My recipes background alt'></div>
</div>

<div class="container">
    <div class="section">
        <a class = "waves-effect waves-light btn modal-trigger orange darken-1" href = "#modal5">Add a Recipe</a>

        <!--<div class = 'row center'>-->
        <?php
        $stmt = $db->query("SELECT usersrecipe.user_id, usersrecipe.recipe_id AS usersrecipe_id, "
                . "recipes.recipe_id, recipes.title, recipes.description, recipes.cooktime, recipes.price, "
                . "recipes.image, recipes.origin_id FROM usersrecipe "
                . "INNER JOIN recipes ON usersrecipe.recipe_id = recipes.recipe_id "
                . "WHERE usersrecipe.user_id = $user_id ORDER BY recipes.recipe_id DESC");

//        $stmt = $db->query("SELECT * FROM recipes ORDER BY recipe_id DESC");
//        $stmt = $db->query("SELECT users.user_id, usersrecipe.user_id, usersrecipe.recipe_id, recipes.recipe_id, recipes.title, recipes.description, recipes.cooktime, recipes.price, recipes.image, recipes.origin_id FROM users"
//                . "INNER JOIN usersrecipe ON usersrecipe.user_id = users.user_id"
//                . "INNER JOIN recipes ON recipes.recipe_id = usersrecipe.recipe_id"
//                . "WHERE user_id=:user_id");
//        $stmt->bindValue(':user_id', $user_id);
//        $stmt->execute();

        while ($recipes = $stmt->fetchObject()) {
            ?>
            <section class="recipes">
                <div class="recipe">
                    <a href="recipe.php">
                        <h3><?php echo $recipes->title; ?></h3>
                    </a>
                    <!--<figure>-->  
                    <a href="recipe.php">
                        <img style="width: 400px;" src="img/recipe/<?php echo $recipes->image ?>" alt="<?php echo $recipes->title ?> image">
                    </a>
                    <div class="desc">
                        <h4>Description</h4>

                        <?php echo $recipes->description ?>
                    </div>
                    <div class="directions">
                        <div class="cookingtime">
                            <h5>Cooking Time</h5>
                            <?php echo $recipes->cooktime ?> minutes
                            <?php
                            $stmt4 = $db->query("SELECT * FROM origins WHERE origin_id=$recipes->origin_id");
                            $country = $stmt4->fetchObject();
                            ?>
                            <h5>Country of origin:</h5>
                            <h5> <?php echo $country->country ?></h5>
                        </div>
                    </div>
                    <!--Edit recipe button-->
                    <a class = "waves-effect waves-light btn orange darken-1" href = "editRecipeForm.php?recipe_id=<?php echo $recipes->recipe_id; ?>">Edit Recipe</a>
                    <!--Delete recipe button-->
                    <a class = "waves-effect waves-light btn orange darken-1" href = "actions/recipe/deleteRecipe.php?recipe_id=<?php echo $recipes->recipe_id; ?>">Delete Recipe</a>

                    <div class="review-area">
                        <div class="reviews">
                            <!--****************-->
                            <!--RETRIEVE REVIEWS-->
                            <!--****************-->
                            <h4>Reviews</h4>
                            <?php
                            /* DONT CALL THIS STMT1, php gets the variables cofused */
                            $stmt2 = $db->query("SELECT * FROM ratings WHERE recipe_id=$recipes->recipe_id ORDER BY rating_id DESC");
                            while ($review = $stmt2->fetchObject()) {
                                ?>
                                <div class="review">
                                    <!--***************-->
                                    <!--RETRIEVE REVIEW-->
                                    <!--***************-->
                                    <p>Review: <?php echo $review->description; ?></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <!--*************-->
                        <!--POST A REVIEW--> 
                        <!--*************-->
                        <form class="post-review" method="post" action="actions/ratings/addReview.php">
                            <p><label for="description">Post a Review about a recipe:</label></p>
                            <p><textarea name="description" rows="10" cols="60"></textarea> </p>

                            <input name="user_id" type="hidden" value="<?php echo $user_id ?>">
                            <input name="recipe_id" type="hidden" value="<?php echo $recipes->recipe_id ?>">
                            <input name="type_id" type="hidden" value="1">

                            <input type='submit' name='submit' value='Submit Review'>
                        </form>
                    </div>
            </section>

            <?php
        }
        ?>
        <!--</div>-->
    </div>
</div>

<div class = 'container'>
    <div class = 'section'>
        <div class = 'row center'>
            <a class = "waves-effect waves-light btn modal-trigger orange darken-1" href = "#modal5">Add a Recipe</a>
            <!--<a class = "waves-effect waves-light btn modal-trigger" href = "actions/recipe/addRecipe.php">Add Recipe</a> -->
            <!--********** -->
            <!--ADD RECIPE-->
            <!--********** -->
            <div id = "modal5" class = "modal nav-login" style = "height: 1000px">
                <h4>Add a recipe</h4>
                <form method = "post" action = "actions/recipe/addRecipe.php" enctype = "multipart/form-data" >
                    <p><input name = "user_id" type = "hidden" id = "user_id" value = "<?php echo $user_id; ?>"></p>

                    <div class = "left">
                        <p><label for = "title">Recipe Title:</label></p>
                        <p> <input name = "title" type = "text" id = "title"/></p>

                        <p><label for = "description">Description:</label></p>
                        <p><textarea name = "description" rows = "10" cols = "60"></textarea> </p>

                        <p><label for = "cooktime">Cook time:</label></p>
                        <p>In minutes: <input name = "cooktime" type = "text" id = "cooktime"/></p>

                        <p><label for = "price">Total cost price</label></p>
                        <p><input name = "price" type = "text" id = "price"/>DKK</p>

                        <p><label for = "image">Upload an image of the dish:</label></p>
                        <p><input type = "file" name = "image"/></p>

                        <p><label for = "origin_id">Select the country that the dish originates from: </label></p>
                        <p>
                            <select name = "origin_id" style = "display: block;">
                                <!--****************** -->
                                <!--RETRIEVE COUNTRIES-->
                                <!--****************** -->
                                <?php
                                $stmt = $db->query("SELECT * FROM origins ORDER BY origin_id ASC");
                                while ($country = $stmt->fetchObject()) {
                                    ?>
                                    <option value="<?php echo $country->origin_id ?>"><?php echo $country->country ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </p>
                        <input type='submit' name='submit' value='Publish Recipe'>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
include './inc/footer.php';