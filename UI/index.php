<?php
require_once(__DIR__."/../Cart.php");
$cartManager = new CartManager(new Cart());
#region
$product = new Product();
$product->ID = 1;
$product->Name = "Xiaomi Mi 9T";
$product->Count = 1;
$product->Price = 3999;
$cartManager->Add($product);
#endregion
#region
$product = new Product();
$product->ID = 2;
$product->Name = "Samsung S3 Mini";
$product->Count = 1;
$product->Price = 399;
$cartManager->Add($product);
#endregion

$get = $cartManager->GetAll();
echo "<pre>";
print_r($get);

$getByID = $cartManager->GetByID(1);
print_r($getByID);

$cartManager->ClearCart();

print_r($cartManager->GetAll());


