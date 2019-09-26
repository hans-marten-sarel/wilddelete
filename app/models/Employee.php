<?php


namespace App\Models;


use App\DI;
use PDO;
use PDOStatement;

class Employee extends model
{
    public static $tableName = 'employees';
    public $id;
    public $fname;
    public $lname;
    public $bday;
    public $phone;

