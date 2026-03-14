<?php

namespace app\controllers;

use app\engine\File;
use app\engine\Session;
use app\models\Category;
use app\models\Product;
use app\models\User;

class ShopController extends Controller
{
    public function actionIndex()
    {
        //echo 'sdfsfassdfasdsfasdf';
        echo $this->render('main', []);
    }
    public function actionGetUsers(){
        // $user= new User('-','admin','','1999-05-24','admin','1234',-1);
        // $user->save();
        $users=User::getAll();
        var_dump($users);
    }

     public function actionNewCategoryForm(){
        if(Session::getRole()& CAN_EDIT_PRODUCT){
            echo $this->render('management/newcategoryform',[]);
        }
        else header('location: /'); 
     }
  
   public function actionNewCategory($p){
    if(Session::getRole()&CAN_EDIT_PRODUCT){
        $error=null;
        if($p['name']===''){
            $error='Название категории не указано!';
            echo $this->render('management/newcategoryform',['p'=>$p,'error'=>$error]);
        } else{
            $file = new File($_FILES['image']);
            if($file->hasFile()){
                if(!$file->upCorrectly())
                    $error='Ошибка при загрузке файла!';
                else 
                    if(!$file->isImage())
                        $error='Файл не является изображением';
                if($error)    
            echo $this->render('management/newcategoryform',['p'=>$p,'error'=>$error]);
        else{
            $upDir='/public/images/';
            $extension =  pathinfo($file->getFileName(),PATHINFO_EXTENSION);
            $fn='category_'.uniqid().'.'.$extension;
            if($file->save($fn,$upDir)){
                $cat = new Category($p['name'],$fn,$p['description']);
                $cat->save();
                header('location: /');
            }
            else{
                $error='Ошибка при сохранение файла';
            echo $this->render('management/newcategoryform',['p'=>$p,'error'=>$error]);
            }

        }        
            }else{
                 $cat = new Category($p['name'],'',$p['description']);
                $cat->save();
                header('location: /');
            }
        }
    }else header('location: /');
   }

   public function actionNewProductForm()
   {
    if(Session::getRole() & CAN_EDIT_PRODUCT){
        $cats=Category::getAll('name','',false);
        echo $this->render('management/newproductform',['cats'=>$cats]);
    } else header('location: /');
   }

     protected function strToNumber($str){
        $str=str_replace(',','.', $str);
          $str=str_replace(' ','', $str);
          if(is_numeric($str))
            return $str+0;
        return null;

        }

 public function actionNewProduct($p){
    if(Session::getRole()&CAN_EDIT_PRODUCT){
        $error=null;
        $cat=Category::getALL('name','',false);
        if($p['name']===''|| !$this->strToNumber($p['price'])) {
            $error='Не указано название или цена';
            echo $this->render('management/newproductform',['p'=>$p,'error'=>$error, 'cats'=>$cats]);
        } else{
            $file = new File($_FILES['image']);
            if($file->hasFile()){
                if(!$file->upCorrectly())
                    $error='Ошибка при загрузке файла!';
                else 
                    if(!$file->isImage())
                        $error='Файл не является изображением';
                if($error)    
             echo $this->render('management/newproductform',['p'=>$p,'error'=>$error, 'cats'=>$cats]);
        else{
            $upDir='/public/images/';
            $extension =  pathinfo($file->getFileName(),PATHINFO_EXTENSION);
            $fn='product_'.uniqid().'.'.$extension;
            if($file->save($fn,$upDir)){
                $prod= new Product($p['name'],$p['description'], $this->strToNumber($p['price']),$fn,$p['category']);
                $prod->save();
                header('location: /');
            }
            else{
                $error='Ошибка при сохранение файла';
            echo $this->render('management/newcategoryform',['p'=>$p,'error'=>$error]);
            }

        }        
            }else{
                 $prod= new Product($p['name'],$p['description'], $this->strToNumber($p['price']),'',$p['category']);
                $prod->save();
                header('location: /');
            }
        }
    }else header('location: /');
   }

}