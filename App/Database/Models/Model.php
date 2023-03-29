<?php
namespace App\Database\Models;

use App\Database\Config\Connection;

//include "App/Database/Config/Connection.php";
//include "../../../vendor/autoload.php";
include "App/Database/Config/Connection.php";

class Model extends Connection
{
    const TABLE='';

    public static function all()
    {
        $query="SELECT * FROM ".static::TABLE;
    }
    PUBLIC STATIC FUNCTION find($id)
    {
        $query="SELECT * from ". static::TABLE . "WHERE id ={$id}";
        echo $query;
    }
}