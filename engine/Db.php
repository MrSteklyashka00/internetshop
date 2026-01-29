<?php
namespace app\\engine;

use app\traits\TSingleton;

class Db{
     private $config= [
        'driver'=> 'mysql',
        'host'=>'localhost',
        'login'=>'root',
        'password'=>'',
        'database'=>'ishop',
        'charset'=>'utf8'
     ];
     use TSingleton;


     private $connection = null;

     private function prepareDsnString(){
        return sprintf(
            //mysql:host=localhost;dbname=ishop;charset=utf8
            "%s:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
        );
     }

     private function gerConnection(){
        if(is_null($this->connection)){
            $this->connection = new \PDO(
                $this->prepareDsnString(),
                $this->config['login'],
                $this->config['password']
            );
            $this->connection->setAttribute(
            \PDO::ATTR_DEFAULT_FETCH_MODE,
            \PDO::FETCH_ASSOC
            );
        }
        return $this->connection;
     }

    private function query($sql,$params){
        $STH=$this->getConnection()->prepare($sql);
        $STH->execute($params);
        return $STH;
    }     


    
    public function queryOne($sql,$params=[],$class=null){
    $STH=$this->query($qsl,$params);
    if ($class)
    $STH->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class);
    return $STH->fetch();
    }
  
    
    public function queryMany($sql,$params=[] =[],$class=null){
    $STH=$this->query($sql,$params);
    if($class)
    $STH->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class);
    return $STH->fetchAll();

    
    }

    public function execute($sql,$params=[]){
        return $this->query($sql,$params)->rowCount();
    }

    public function lastInsertId(){
        return $this->connection->lastInsertId();
    }
}
