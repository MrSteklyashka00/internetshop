<?php
namespace app\models;

use app\engine\Session;

class Category extends DBModel{
    protected $id;
    protected $name;
    protected $img;
    protected $description;
    protected $user_id;
    protected $create_at;

    protected $props=[
        'name' => false,
        'img'=> false,
        'description'=> false,
        'user_id'=> false
    ];

     public function __construct($name,$img,$description)
     {
        $this-> name=$name;
         $this-> img=$img;
          $this-> description=$description;
          $this->user_id= Session::getUserId();
     }

     public static function getTableName()
     {
        return 'category';
     }

}