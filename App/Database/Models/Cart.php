<?php

namespace App\Database\Models;

use App\Database\Models\Contacts\crud as ContactsCrud;
include "App/Database/Models/Model.php";
//include "../../../vendor/autoload.php";
include "App/Database/Models/Contacts/Crud.php";

class Cart extends Model implements ContactsCrud{

private $product_id,$user_id,$quantity;
const TABLE="carts";


public function create()
{
    $query="INSERT INTO ".self::TABLE." (product_id,user_id,quantity) 
    VALUES ( ?, ?, ?)";

    $stmt=$this->conn->prepare($query);
    if(! $stmt)
    {
        return false;
    }
    $bind=$stmt->bind_param("iii",$this->product_id,$this->user_id,
    $this->quantity);
    if(! $bind)
    {
        return false;
    }
    return $stmt->execute();
}



   
    public function read()
    {
    #
    }
    public function update()
    {
    #
    }
    public function delete()
    {
        $query="DELETE FROM `carts` WHERE product_id = ? AND user_id= ? AND quantity= ? LIMIT 1"; 
        $stmt=$this->conn->prepare($query);
        if(! $stmt)
        {
            return false;
        }
        $bind=$stmt->bind_param("iii",$this->product_id,$this->user_id,$this->quantity);
        if(! $bind)
        {
            return false;
        }
        return $stmt->execute();

    }

/**
 * Get the value of product_id
 */ 
public function getProduct_id()
{
return $this->product_id;
}

/**
 * Set the value of product_id
 *
 * @return  self
 */ 
public function setProduct_id($product_id)
{
$this->product_id = $product_id;

return $this;
}

/**
 * Get the value of user_id
 */ 
public function getUser_id()
{
return $this->user_id;
}

/**
 * Set the value of user_id
 *
 * @return  self
 */ 
public function setUser_id($user_id)
{
$this->user_id = $user_id;

return $this;
}

/**
 * Get the value of quantity
 */ 
public function getQuantity()
{
return $this->quantity;
}

/**
 * Set the value of quantity
 *
 * @return  self
 */ 
public function setQuantity($quantity)
{
$this->quantity = $quantity;

return $this;
}
}