<?php
namespace app\model;
use Core\Model;

class User extends \Core\Model
{
    protected $id;
    protected $username;
    protected $password;
    public $email;

    public function login()
    {
        echo 'User login ke sistem';
    }

    public function register()
    {
        echo 'User mendaftar ke sistem';
    }
}