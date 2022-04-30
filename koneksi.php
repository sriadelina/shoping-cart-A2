<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopping_cart3');

if (!$conn) {
    die ("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}
