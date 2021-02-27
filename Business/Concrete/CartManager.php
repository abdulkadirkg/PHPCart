<?php
class CartManager implements ICartService{
    private $CART;
    protected ICart $_iCart;
    public function __construct(ICart $cart){
        $this->_iCart = $cart;
        $this->CART = $_SESSION["CART"];
    }
    public function Add(Product $product){
        $this->_iCart->Add($product);
    }

    function Update(Product $product):bool
    {
        return $this->_iCart->Update($product);
//        $this->CART[$product->ID] = $product;
    }

    function Delete(Product $product):bool
    {
        return $this->_iCart->Delete($product);
//        if (key_exists($product->ID,$this->CART)){
//            unset($this->CART[$product->ID]);
//            return true;
//        } else {
//            return false;
//        }
    }

    function GetAll():object
    {
        return $this->_iCart->GetAll();
//        return (object)$this->CART;
    }

    function GetByID(int $ID):Product
    {
        return $this->_iCart->GetByID($ID);
//        return $this->CART[$ID];
    }

    function GetCount():float
    {
        return $this->_iCart->GetCount();
//        return count($this->CART);
    }

    function GetTotal(string $key):float
    {
        return $this->_iCart->GetTotal($key);
    }

    function ClearCart(){
        $this->_iCart->ClearCart();
    }
}