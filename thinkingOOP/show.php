<?php
include_once "functions.php";
$db = include_once "database/start.php";
$id = $_GET["id"];
$post = $db->getOne("posts", $id);
?>

<h1><?php echo $post["title"]; ?></h1>


