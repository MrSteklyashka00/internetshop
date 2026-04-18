<?php
namespace app\models;
class Items extends DBModel{

   protected $id;
   protected $basket_id;
   protected $product_id;
   protected $qauntity;

   protected $props=[
    'basket_id'=> false,
    'product_id'=>false,
    'qauntity'=>false
   ];

   public function __construct($b_id=0, $p_id=0, $q=0)
   {
       $this->basket_id=$b_id;
       $this->product_id=$p_id;
       $this->qauntity= $q;
   }
  public static function getTableName()
  {
   return 'cart_items';

  }


}