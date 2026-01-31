<?php

namespace app\models;

class User extends DBModel{
    protected $id;
    protected $lastname;
    protected $firstname;
    protected $midlename;
    protected $birthdate;
    protected $email;
    protected $password;
    protected $role;

    protected $props=[
        'lastname'=>false,
        'firstname'=>false,
        'midlename'=>false,
        'birthdate'=>false,
        'email'=>false,
        'password'=>false,
        'role'=>false,
    ];

    public function __construct(
       $lastname=null,
       $firstname=null,
       $midlename=null,
       $birthdate='2000-01-01',
       $email=null,
       $password=null,
       $role=0
    )
    {
        $this->lastname=$lastname;
        $this->midlename=$midlename;
        $this->birthdate=$birthdate;
        $this->email=$email;
        $this->firstname=$firstname;
        $this->role=$role;
        if($password)
            $this->password=password_hash($password,PASSWORD_DEFAULT);

    }
    public static function getTableName()
    {
      return 'users';
    }



    }