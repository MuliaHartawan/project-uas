<?php
session_start();
include '../dbconnect.php';


$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM produk WHERE idproduk=$id");

header("Location:produk.php");
