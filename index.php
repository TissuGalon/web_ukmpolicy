<?php

include 'proses/koneksi.php';

if (!isset($_GET['x'])) {
   header('location:index.php?x=home');
} else {
   $x = $_GET['x'];

   if ($x == 'home') {
      include 'home.php';
   } elseif ($x == 'blog') {
      include 'blog.php';
   } elseif ($x == 'documentation') {
      include 'documentation.php';
   } elseif ($x == 'open-recruitment') {
      include 'open-recruitment.php';
   } else {
      include 'home.php';
   }
}

?>