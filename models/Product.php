<?php
namespace app\models;

use app\engine\Session;

class Product extends DBModela{
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $img;
    protected $category_id;
    protected $user_id;
    protected $created_at;
    protected $updated_at;

   protected $props=[
    'name'=> false,
    'description'=> false,
    'price'=> false,
    'img'=> false,
    'category_id'=> false,
    'user_id'=> false,
   ];

    public function __construct(
        $name=null,
        $description=null,
        $price=0,
        $img=null,
        $category_id=0
    )
    {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->img = $img;
    $this->category_id = $category_id;
    $this->user_id=Session::getUserId()
    }

    public static function getTableName()
    {
      return 'product'; 
    }
}