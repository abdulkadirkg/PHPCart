<?php
interface ICartService{
    function Add(Product $product);
    function Update(Product $product);
    function Delete(Product $product);
    function GetAll();
    function GetByID(int $ID);
    function GetCount();
    function GetTotal(string $key);
    function ClearCart();
}