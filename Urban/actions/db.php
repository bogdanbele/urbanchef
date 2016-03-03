<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
session_start();
try {
//    $db = new PDO("mysql:host=web22.meebox.net;dbname=mattskea_mybeers", "mattskea", "Uzb2W1x1i6");
    $db = new PDO("mysql:host=localhost;dbname=urbanchef", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print_r($e);
}
 
