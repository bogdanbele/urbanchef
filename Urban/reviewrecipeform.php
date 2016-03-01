<!--**********-->
<!--MATTS CODE-->
<!--**********-->
<?php
include './inc/header.php';
//include './inc/checked_logged_in.php';
//RETRIEVE RECIPES
$stmt = $db->query("SELECT * FROM recipes ORDER BY recipe_id DESC");
echo"User_id : $user_id";
while ($recipes = $stmt->fetchObject()) {
    ?>
    <section class="recipes">
        <div class="recipe">
            <a href="recipe.php">
                <h3><?php echo $recipes->title; ?></h3>
            </a>
            <!--<figure>-->  
            <a href="recipe.php">
                <img src="img/recipe/<?php echo $recipes->image ?>" alt="<?php echo $recipes->title ?> image">
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

                    <!--                        <li>Cook: 10 minutes</li>
                                            <li>Ready in: 1:20 minutes</li>-->

                    <!--                    <h4>Directions</h4>
                                        <ol>
                                            <li>  Pour the warm milk into a mixing bowl and mash in the fresh cake yeast. Mix in 6 1/2 tablespoons of soft butter, eggs, cardamom, 2 tablespoons sugar, salt, and 3 1/2 cups of the flour. Use a wooden spoon to mix the dough. If it's very sticky, mix in the remaining 1/2 cup of flour. Cover the bowl and let the dough rise for 30 minutes.</li> 
                                            <li> Cream together the 2/3 cup butter and 1/2 cup sugar. Stir in the cinnamon.</li> 
                                            <li>Transfer the dough to a floured surface and knead it until it's firm, about 3 minutes. Divide the dough in half; roll each half into a rectangle no more than 1/2 inch thick. Spread each rectangle with half the filling.</li>  
                                            <li>Stack one layer of dough and filling on top of the other rectangle of dough, filling-side up. Roll the dough up, starting with the edge closest to you, to form a long log. Cut the log into 1 inch-thick slices.</li>
                                            <li>Preheat an oven to 425 degrees F (220 degrees C). Line a baking sheet with parchment paper, or grease a baking dish or two cake pans.</li>
                                            <li>Place the rolls on the prepared baking sheet, spacing them about 3 inches apart. If you like pull-apart rolls, arrange them in a greased baking dish or cake pans, spacing the rolls about 1 inch apart. Place the uneven end pieces on the baking sheet cut-side up for the best presentation. Let the rolls rest 20 minutes before baking.</li>
                                            <li>Bake the snails in the preheated oven until golden brown, about 10 minutes. Pull-apart rolls will take longer to bake: after 10 minutes, reduce the oven temperature to 350 degrees F (175 degrees C) and bake the rolls until the sides are fully set, about 10 minutes longer. Cover the baking dish with foil if the rolls begin to get too brown.</li>
                                        </ol>-->


                </div>
            </div>
        </div>
        <div class="review-area">
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
                        <!--*****************-->
                        <!--RETRIEVE COMMENTS-->
                        <!--*****************-->
                        <ul>
                            <?php
                            /* DONT CALL THIS STMT1||STMT2, php gets the variables cofused */
                            $stmt3 = $db->query("SELECT * FROM "
                                    . "ratings WHERE "
                                    . "recipe_id=$review->recipe_id && "
                                    . "rating_id=$review->rating_id && "
                                    . "type_id = 2 ORDER BY rating_id DESC");
                            while ($comment = $stmt3->fetchObject()) {
                                ?>
                                <li>Comment: <?php echo $comment->description; ?></li>
                                <?php
                            }
                            ?>
                        </ul>
                        <!--************-->
                        <!--POST COMMENT--> 
                        <!--************-->
                        <form class="post-comment" method="post" action="actions/ratings/addComment.php">
                            <p><label for="description">Post a comment about this review:</label></p>
                            <p><textarea name="description" rows="3" cols="40"></textarea> </p>

                            <input name="user_id" type="hidden" value="<?php echo $user_id ?>">
                            <input type='hidden' name='recipe_id' value='<?php echo $review->recipe_id; ?>'>
                            <input type='hidden' name='type_id' value='2'>
                            <input type='submit' name='submit' value='Submit Comment'>
                        </form>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <?php
}

include './inc/footer.php';


