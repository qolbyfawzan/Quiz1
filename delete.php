<?php

include 'functions.php';
include 'koneksi.php';
$pdo = pdo_connect();

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('DELETE FROM contacts WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    header("location:index.php");
} else {
    die ('No ID specified!');
}

?>