<?php

namespace app\controllers;

use app\emgine\File;
use app\engine\Session;
use app\models\Category;
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
            $extencion =  pathinfo($file->getFileName(),PATHINFO_EXTENSION);
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
}