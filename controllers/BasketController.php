<?php
namespace app\controllers;

use app\engine\Session;
use app\models\Basket;

class BasketController extends Controller{
    public function actionAddToBasket($p){
        $response =[
        'status'=>'Error',
        'quantity'=>0

        ];
      if(Session::isAuth())
        if(Session::getRole()& CAN_BUY){
            $basket_id=0;
             $sql="SELECT id FROM basket WHERE user_id=:user_id AND status=0 LIMIT 1";
             $BASKET=Basket::commonQuery($sql,['user_id'=>Session::getUserId()],false,true);
             var_dump($Baskets);
        }
    }
}