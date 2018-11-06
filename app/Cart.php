<?php

namespace App;


class Cart
{
    public $items = null; // this variable contains different types of books and their different quantities.
    //its also an associative array
    public $totalQty=0;
    public $totalPrice=0;


    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }
    }


    public function add($item,$id)
    {
        //if its a new cart then the new item is added to cart
        $storedItem=['qty'=>0,'price'=>$item->price_excl_vat,'item'=>$item];

        //if there are items in the cart;
        if($this->items)
        {
            //if that particular item already exists. so basically the assumption is that this function(the one below) searches my cart for
            //any book with the id passed in the parameter
            if(array_key_exists($id,$this->items))
            {

                //if the book is found add that book/item to the storeditem variable which is also an associative array.
                //Remember we are overriding the storeditem variable, not adding elements to the array.
                $storedItem=$this->items[$id];
            }
        }
        //for both old and new cart increment the number of books/items
        $storedItem['qty']++;
        $storedItem['price']= $item->price_excl_vat * $storedItem['qty'] ;

        //add the item into the cart
        $this->items[$id]=$storedItem;
        $this->totalQty++;
        $this->totalPrice+=$item->price_excl_vat;
    }

    public function reduceByOne($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price']-=$this->items[$id]['item']['price_excl_vat'];
        $this->totalQty--;
        $this->totalPrice-=$this->items[$id]['item']['price_excl_vat'];

        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }

    }

    public function removeItem($id)
    {
        $this->totalQty-= $this->items[$id]['qty'];
        $this->totalPrice-=$this->items[$id]['price'];
        unset($this->items[$id]);

    }

    public function addTen($item,$id)
    {
        //if its a new cart then the new item is added to cart
        $storedItem=['qty'=>0,'price'=>$item->price_excl_vat,'item'=>$item];

        //if there are items in the cart;
        if($this->items)
        {
            //if that particular item already exists. so basically the assumption is that this function(the one below) searches my cart for
            //any book with the id passed in the parameter
            if(array_key_exists($id,$this->items))
            {

                //if the book is found add that book/item to the storeditem variable which is also an associative array.
                //Remember we are overriding the storeditem variable, not adding elements to the array.
                $storedItem=$this->items[$id];
            }
        }
        //for both old and new cart increment the number of books/items
        $storedItem['qty']+=10;
        $storedItem['price']= $item->price_excl_vat * $storedItem['qty'] ;

        //add the item into the cart
        $this->items[$id]=$storedItem;
        $this->totalQty+=10;
        $this->totalPrice+=(($item->price_excl_vat)*10);
    }

    public function addHundred($item,$id)
    {
        //if its a new cart then the new item is added to cart
        $storedItem=['qty'=>0,'price'=>$item->price_excl_vat,'item'=>$item];

        //if there are items in the cart;
        if($this->items)
        {
            //if that particular item already exists. so basically the assumption is that this function(the one below) searches my cart for
            //any book with the id passed in the parameter
            if(array_key_exists($id,$this->items))
            {

                //if the book is found add that book/item to the storeditem variable which is also an associative array.
                //Remember we are overriding the storeditem variable, not adding elements to the array.
                $storedItem=$this->items[$id];
            }
        }
        //for both old and new cart increment the number of books/items
        $storedItem['qty']+=100;
        $storedItem['price']= $item->price_excl_vat * $storedItem['qty'] ;

        //add the item into the cart
        $this->items[$id]=$storedItem;
        $this->totalQty+=100;
        $this->totalPrice+=(($item->price_excl_vat)*100);
    }

}
