<?php
/*
Najib Rifai
24060120140082 / B1
*/

//File: delete_cart.php
//Deskripsi: untuk menghapus session

session_start();
if(isset($_SESSION['cart'])){
    //Fungsi unset() dapat digunakan untuk membatalkan setel variabel
    unset($_SESSION['cart']);
}
header('Location: view_books.php');
?>