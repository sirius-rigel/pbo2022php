<?php
namespace app\model;
require_once 'core\Model.php';

class User extends \core\Model
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