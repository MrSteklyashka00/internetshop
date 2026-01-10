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
        return sprinf(
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

}
