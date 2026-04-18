<?php
namespace app\models;

use app\interfaces\IModel;

abstract class Model implements IModel{
    protected $props=[];

    public function __set($name, $value){
           $this->$name=$value;
        if(array_key_exists($name,$this->props)){
            $this->props[$name]=true;
        }
    }

    public function __get($name){
       
        return $this->$name;
    
}
}