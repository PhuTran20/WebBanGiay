<?php 
 namespace App\Cart;
 class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;
    public function __construct( $cart)
    {
        if($cart){
            $this->products= $cart->product;
            $this->totalPrice= $cart->totalPrice;
            $this->totalQuanty= $cart->totalQuanty;
        }
    }
    public function AddCart($product,$id){
        $newProduct = ['quanty' =>0,'price'=>$product->price,'productInfo'=>$product ];
        if($this -> products){
            if(array_key_exists($id, $this->$product )){
                $newProduct =$product[$id];
            }

            
        }
        $newProduct['quanty']++;
        $newProduct['price'] =$newProduct['quanty']*$product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice = $product->price;
        $this->totalQuanty++ ;

    }
}
?>