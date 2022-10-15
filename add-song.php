<?php
session_start();

// TODO: add config
$conn = new mysqli("localhost", "root", "", "class", 3306) or die ('No database found');

$statement = $conn->prepare('INSERT INTO songs (name) VALUES (?)');
$statement->execute([$_POST['songName']]);

header("Location: index.php");
