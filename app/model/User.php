<?php
namespace App\Model;
use Core\Model;

class User extends \Core\Model
{
    protected $id;
    protected $username;
    protected $password;
    public $email;

    public static function login()
    {
        echo 'User login ke sistem';
    }

    public function register()
    {
        self::login();
        echo 'User mendaftar ke sistem';
    }
}