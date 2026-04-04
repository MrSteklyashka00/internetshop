<?php

namespace app\models;

use app\engine\Session;

class Basket extends DBModel{
    
    protected $id;
     protected $user_id;
     protected $status;
     protected $paid_at;
     protected $created_at;


     protected $props=[
         'user_id'=>false,
         'status'=>false,
         'paid_at'=>false,

     ];

     public function __construct()
     {
       $this->user_id=Session::getUserId();
       $this->status=0;
       $this->paid_at=null;
     }

    public static function getTableName()
    {
        return 'basket';
    }

}
