<?php
session_start();
session_destroy();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $page = str_replace(".php", "", $page);
    header('location:' . $page);
} else {
    header('location:index');
}
?>