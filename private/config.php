<?php
ini_set('session.cookie_lifetime', 60 * 60 * 24);
ini_set('session.gc-maxlifetime', 60 * 60 * 24);
session_start();
date_default_timezone_set('Asia/Manila');
    try {
        $db = new PDO("mysql:host=localhost;dbname=quiz;",'root','');
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }

    require_once '/functions/func.php';
?>