<?php
namespace app\interfaces;
interface IModel{
    public static function getOneClass($id);
     public static function getAllClass();
      public static function getTableName();
}