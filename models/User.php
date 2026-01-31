<?php

namespace app\models;

class User extends DBModel{
    protected $id;
    protected $lastname;
    protected $firstname;
    protected $nidlename;
    protected $birthdate;
    protected $email;
    protected $password;
    protected $role;

    protected $props=[
        'lastname'=>false,
        'firstname'=>false,
        'nidlename'=>false,
        'birthdate'=>false,
        'email'=>false,
        'password'=>false,
        'role'=>false,
    ];

    public function __construct(
       $lastname=null,
       $firstnam=null,
       $nidlename=null,
       $birthdate='2000-01-01',
       $email=null,
       $password=null,
       $role=0
    )
    {
        $this->lastname=$lastname;
        $this->nidlename=$firstname;
        $this->birthdate=$firstname;
        $this->email=$firstname;
        $this->firstname=$firstname;
        $this->role=$firstname;
        if($password)
            $this->password=password_hash($password,PASSWORD_DEFAULT);

    }
    public static function getTableName()
    {
      return 'users';
    }



    }