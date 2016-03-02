<?php
// Added check logged in
if (!isset($_SESSION["user_id"])) {
    echo "Not logged in";
//    header("Location: index.php");
} 

