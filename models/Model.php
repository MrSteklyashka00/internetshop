<?php
namespace app\models;

use app\interfaces\IModel;

abstract class Model implements IModel{
    protected $props=[];

    public function __set($name, $value){
        if(array_key_exists($name,$this->property_exists)){
            $this->$name=$value;
            $this->props[$name]=true;
        }
    }

    public function __get($name){
        if(array_key_exists($name,$this->props)){
        return $this->$name;
    }
}
}