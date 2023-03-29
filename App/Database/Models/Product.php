<?php
namespace App\Database\Models;

use App\Database\Models\Contacts\crud;
use App\Database\Models\Model;

include "App/Database/Models/Model.php";
include "App/Database/Models/Contacts/Crud.php";

class Product extends Model implements Crud{
    private $id,$name_en,$name_er,$details_en,$details_ar,$code,$price,$status,
    $quantity,$image,$brand_id,$subcategory_id,$created_at,$updated_at;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_en
     */ 
    public function getName_en()
    {
        return $this->name_en;
    }

    /**
     * Set the value of name_en
     *
     * @return  self
     */ 
    public function setName_en($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * Get the value of name_er
     */ 
    public function getName_er()
    {
        return $this->name_er;
    }

    /**
     * Set the value of name_er
     *
     * @return  self
     */ 
    public function setName_er($name_er)
    {
        $this->name_er = $name_er;

        return $this;
    }

    /**
     * Get the value of details_en
     */ 
    public function getDetails_en()
    {
        return $this->details_en;
    }

    /**
     * Set the value of details_en
     *
     * @return  self
     */ 
    public function setDetails_en($details_en)
    {
        $this->details_en = $details_en;

        return $this;
    }

    /**
     * Get the value of details_ar
     */ 
    public function getDetails_ar()
    {
        return $this->details_ar;
    }

    /**
     * Set the value of details_ar
     *
     * @return  self
     */ 
    public function setDetails_ar($details_ar)
    {
        $this->details_ar = $details_ar;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

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

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of brand_id
     */ 
    public function getBrand_id()
    {
        return $this->brand_id;
    }

    /**
     * Set the value of brand_id
     *
     * @return  self
     */ 
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    /**
     * Get the value of subcategory_id
     */ 
    public function getSubcategory_id()
    {
        return $this->subcategory_id;
    }

    /**
     * Set the value of subcategory_id
     *
     * @return  self
     */ 
    public function setSubcategory_id($subcategory_id)
    {
        $this->subcategory_id = $subcategory_id;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    public function create()
    {
    #
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
    #   
    }
}