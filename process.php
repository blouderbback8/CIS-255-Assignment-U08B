<?php
if (isset($_POST['submit'])) {
// initialized toppings variable for amount
$topping1 = 0;
$topping2 = 0;
$topping3 = 0;
$topping4 = 0;
$topping5 = 0;
// Initialized toppings variable for name
$topping_name1='';
$topping_name2='';
$topping_name3='';
$topping_name4='';
$topping_name5='';

$pizza_type = $_POST['pizza_type'];
if ($pizza_type == 10) {
$pizza_name = ' You ordered a Small sized pizza with';
} else if ($pizza_type == 15) {
$pizza_name = ' You ordered a Medium sized pizza with';
} else if ($pizza_type == 20) {
$pizza_name = ' You ordered a Large sized pizza with';
}
if (isset($_POST['topping1'])) {
$topping1 = 2.00;
$topping_name1 = ', onions';
}
if (isset($_POST['topping2'])) {
$topping2 = 3.00;
$topping_name2 = ', peppers';
}
if (isset($_POST['topping3'])) {
$topping3 = 2.25;
$topping_name3 = ', mushrooms';
}
if (isset($_POST['topping4'])) {
$topping4 = 3.50;
$topping_name4 = ', cheese';
}

//Making total payable amount
echo $pizza_price = $pizza_type + $topping1 + $topping2 + $topping3 + $topping4;
//Makeing final topping details which is shown before checkout
echo $pizza_topping_details =  " USD".$pizza_name.$topping_name1.$topping_name2.$topping_name3.$topping_name4.". Thank you for your purchase!!";

}
?>