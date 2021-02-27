<?php
/*
*   Author  : Abdulkadir KARADAĞ
*   Project : Murâkıb
*/

class Cart implements ICart
{
    private $CART;
    public function __construct(){
        $this->CART = &$_SESSION["CART"];
    }
    public function Add(Product $product){
        $this->CART[$product->ID] = $product;
    }

    function Update(Product $product):bool
    {
        $this->CART[$product->ID] = $product;
    }

    function Delete(Product $product):bool
    {
        if (key_exists($product->ID,$this->CART)){
            unset($this->CART[$product->ID]);
            return true;
        } else {
            return false;
        }
    }

    function GetAll():object
    {
        return (object)$this->CART;
    }

    function GetByID(int $ID):Product
    {
        return $this->CART[$ID];
    }

    function GetCount():float
    {
        return count($this->CART);
    }

    function GetTotal(string $key):float
    {
        return 0.00;
    }

    function ClearCart()
    {
        $this->CART = null;
    }
}