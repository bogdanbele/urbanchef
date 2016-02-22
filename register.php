<?php
session_start();

include ("actions/db.php");
?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<!--        Content Wrapper        -->   

<form action="registerf.php" method="post" enctype="multipart/form-data">
    <label for="fname">First Name:</label><br> 
    <input type="text" name="fname"/> <br> 
    <label for="lname">Last Name:</label><br> 
    <input type="text" name="lname"/><br> 
    <label for="email">Email Address:</label><br> 
    <input type="email" name="email"/><br> 
    <label for="password">Password:</label><br> 
    <input type="password" name="password"/> <br> 
    <label><br> 
    Select image to upload: <br> 
    <input type="file" name="image" /><br> 
</label><br> 
    <label for="description"> Description</label><br> 
    <input type="text" name="description"/><br> 
    <label for="address"> Address</label><br> 
    <input type="text" name="address"/><br> 
     <br><select name="zip_id"><br> 
    <?php
        $sql2 = "SELECT * FROM zipcodes";
        $table2 = $db->query($sql2);
        while ($zipcode = $table2->fetchObject()) 
        {
            $id = $zipcode ->zip_id;
            ?> 
            <option value="<?php echo $id; ?>"><?php  echo $zipcode->city;?> <?php echo $zipcode->zip;?></option>
            <?php 
        }
    ?>
    </select><br>
         <br><select name="right_id"><br> 
    <?php
        $sql3 = "SELECT * FROM accessrights WHERE right_id < 4 AND right_id > 1";
        $table3 = $db->query($sql3);
        while ($accessRights = $table3->fetchObject()) 
        {
            $id2 = $accessRights ->right_id;
            ?> 
            <option value="<?php echo $id2; ?>"><?php  echo $accessRights->type;?></option>
            <?php 
        }
    ?>
    </select><br> <br>
        <input type="submit" value="Submit" name="submit">
</form>
    </form>
</section>