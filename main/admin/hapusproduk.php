<?php
session_start();
include '../dbconnect.php';
 

$id = $_GET['id'];

echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
echo "swal({
    title: 'Apakah benar Kamu ingin menghapus produk '$id'?',
    text: 'Once deleted, you will not be able to recover this imaginary file!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal('Poof! Your imaginary file has been deleted!', {
        icon: 'success',
      });
    } else {
      swal('Your imaginary file is safe!');
    }
  });";
$result = mysqli_query($conn, "DELETE FROM produk WHERE id=$id");
 
header("Location:produk.php");
?>