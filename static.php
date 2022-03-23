<?php
require 'vendor/autoload.php';
use App\Model\User;

User::login();
$admin = new User;
$admin->register();