<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "soto ayam";

switch ($favcolor) {
  case "soto ayam":
    echo "Makanan favoritku soto ayam!";
    break;
  case "mie ayam":
    echo "Makanan favoritku mie ayam!";
    break;
  case "bakso":
    echo "Makanan favoritku bakso!";
    break;
  default:
    echo "Your favoritku soto ayam, mie ayam, bakso!";
}
?>