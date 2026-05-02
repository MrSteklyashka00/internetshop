<?php
namespace app\controllers;

use app\engine\Session;
use app\models\Basket;
use app\models\Items;

class BasketController extends Controller{
    public function actionAddToBasket($p){
        $response =[
        'status'=>'Error',
        'quantity'=>0

        ];
        if($p['product_id'])
            $response['id']=$p['product_id']
      if(Session::isAuth())
        if(Session::getRole()& CAN_BUY){
            $basket_id=0;
             $sql="SELECT id FROM basket WHERE user_id=:user_id AND status=0 LIMIT 1";
             $baskets=Basket::commonQuery($sql,['user_id'=>Session::getUserId()],false,true);
            if($baskets)
                $basket_id=$baskets[0]['id'];
            else{
                $basket=new Basket();
                $basket->save();
                $basket_id=$basket->id;
                if($p['product_id']){
                    $item=new Items($basket_id,$p['product_id'],1);
                    $item->save();
                    $response['status']='OK';
                    $response['quantity']=1;
                    echo json_encode($response,JSON_UNESCAPED_UNICODE);
                }
                return;
            }
            $sql="SELECT * FROM cart_items
            WHERE basket_id=:basket_id AND product_id=:product_id";
            if($p['product_id']){
                $item=Items::commonQuery($sql,['basket_id'=>$basket_id,'product_id'=>$p['product_id']],true,true);
                if($item){
                    $item[0]->quantity++;
                    $item[0]->save();
                    $response['quantity']=$item[0]->quantity;
                }else{
                    $item=new Items($basket_id,$p['product_id']);
                    $item->save();
                      $response['quantity']=1;
                }
                $response['status']='OK';
                 echo json_encode($response,JSON_UNESCAPED_UNICODE);
                 return;
            }
        }
         echo json_encode($response,JSON_UNESCAPED_UNICODE);
    }
    public function actionDeleteFromBasket($p){
        $response =[
        'status'=>'Error',
        'quantity'=>0

        ];
        if($p['product_id'])
            $response['id']=$p['product_id']
      if (Session::isAuth())
        if(Session::getRole()& CAN_BUY){
            $basket_id=0;
             $sql="SELECT id FROM basket WHERE user_id=:user_id AND status=0 LIMIT 1";
             $baskets=Basket::commonQuery($sql,['user_id'=>Session::getUserId()],false,true);
            if($baskets){
            $basket_id=$baskets[0]['id'];
             $sql="SELECT * FROM cart_items
            WHERE basket_id=:basket_id AND product_id=:product_id";
            
            }
                
    }
}