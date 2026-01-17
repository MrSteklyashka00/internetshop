<?php
namespace app\models;
use app\engine\Db;
abstract class DBModel extends Model{
   public static function getOneClass($id){
    $tableName=static::getTableName();
    $sql = "SELECT * FROM {$tableName} WHERE id=:id";
    return Db::getInstance()->queryOneClass($sql,['id'=>$id],static::class);
   }   
}