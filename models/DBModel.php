<?php
namespace app\models;
use app\engine\Db;
abstract class DBModel extends Model{
   public static function getOne($id,$isClass=true){
    $tableName=static::getTableName();
    $sql = "SELECT * FROM {$tableName} WHERE id=:id";
    if($isClass)
    return Db::getInstance()->queryOne($sql,['id'=>$id],static::class);
    else
  return Db::getInstance()->queryOne($sql,['id'=>$id]);
    }   
public static function getAll($orderBy='id',$desc='', $isClass=true){
      $tableName=static::getTableName();
      $sql="SELECT * FROM {$tableName} ORDER BY {$orderBy}";
      if($desc) $sql.=" DESC";
      if ($isClass)
         return Db::getInstance()->queryMany($sql,[],static::class);
      else
          return Db::getInstance()->queryMany($sql);
}

public static function getwhere($name,$sign,$value,$isClass=true){
    $tableName=static::getTableName();
    $sql="SELECT * FROM {$tableName} WHERE {$name}{$sign}:{$name}";
    if($isClass)
      return Db::getInstance()->queryMany($sql,[$name=>$value],static::class);
   else
            return Db::getInstance()->queryMany($sql,[$name=>$value]);

}
protected function insert(){
   $columns = [];
   $params=[];
   $tableName=$this->getTableName();
   foreach($this->props as $key=>$value){
      $params[':'.$key]=$this->$key;
      $columns[]=$key;

   }
   $columns=implode(',',$columns);
   $values=implode(',',array_keys($params));
   $sql="INSERT INTO {$tableName} ({$columns}) VALUES({$values})";
   Db::getInstance()->execute($sql,$params);
   $this->id=Db::getInstance()->lastInsertId();
   return $this;
}
protected function update(){
    $columns = [];
   $params=[];
   $tableName=$this->getTableName();
   foreach($this->props as $key=>$value){
      if($value) continue;
      $params[':'.$key]=$this->$key;
      $columns[]=$key;

   }
   $params[':id']=$this->id;
   if(!empty($columns)){
      $par_str='';
      foreach($columns as $value){
         $par_str.=' '.$value.'=:'.$value.',';
      }
      $par_str=substr($par_str,0,-1).' ';
   }
   $sql="UPDATE {$tableName} SET {$par_str} WHERE id=:id";
   Db::getInstance()->execute($sql,$params);
   foreach($columns as $value)$this->props[$value]=false;
   return $this;

}

public function save(){
   if($this->id==null)
      $this->insert();
   else
      $this->update();
}
public function delete(){
   $tableName=$this->getTableName();
   $sql="DELETE FROM {$tableName} WHERE id=:id";
   Db::getInstance()->execute($sql, ['id'=>$this->id]);
}


}