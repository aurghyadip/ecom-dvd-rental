<?php

session_start();

$multi = $_GET["data"];

$basePrice = $_SESSION["basePrice"];

if($multi == 1)
{
	$_SESSION["totalPrice"] = $basePrice;
}
else if($multi == 2)
{
	$_SESSION["totalPrice"] = $basePrice * 2;
}
else if($multi == 3)
{
	$_SESSION["totalPrice"] = $basePrice * 5;
}
else if($multi == 4)
{
	$_SESSION["totalPrice"] = $basePrice * 10;
}

$output = array(
	"price" => $_SESSION["totalPrice"]
);
echo json_encode($output);