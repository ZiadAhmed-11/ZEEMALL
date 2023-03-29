<?php
namespace App\Http\Requests;

use App\Database\Models\Model;
// include "App/Database/Models/Model.php";

class Validation{
    private $value;
    private $valueName;
    private array $errors=[];
    
    public function required() :self
    {
        if(empty($this->value))
        {
            $this->errors[$this->valueName][__FUNCTION__]=$this->valueName." is required";
        }
        return $this;
    }

    public function max(int $max) :self
    {
        if(strlen($this->value)>$max)
        {
            $this->errors[$this->valueName][__FUNCTION__]=$this->valueName." must be less than {$max} characters";
        }
        return $this;
    }
    public function min(int $min) :self
    {
        if(strlen($this->value)<$min)
        {
            $this->errors[$this->valueName][__FUNCTION__]=$this->valueName." must be greater than {$min} characters";
        }
        return $this;
    }

    public function confirmed($comperedValue) :self
    {
        if($this->value!=$comperedValue)
        {
            $this->errors[$this->valueName][__FUNCTION__]=$this->valueName." not confirmed";
        }
        return $this;
    }
    
    public function regex(string $pattern) :self
    {
        if(! preg_match($pattern,$this->value))
        {
            $this->errors[$this->valueName][__FUNCTION__]= $this->valueName."Invalid";
        }
        return $this;
    }

    public function in(array $values) :self
    {
        if(! in_array($this->value,$values))
        {
            $this->errors[$this->valueName][__FUNCTION__]= $this->valueName." must be ".implode($values);
        }
        return $this;
    }

    public function unique(string $table,string $column)
    {
        $model=new Model;
        $stmt= $model->conn->prepare("SELECT * FROM {$table} WHERE {$column} = ?");
        $stmt->bind_param("s",$this->value);
        $stmt->execute();
        $result=$stmt->get_result();
        if($result->num_rows==1)
        {
            $this->errors[$this->valueName][__FUNCTION__]= $this->valueName." Already Exists";

        }
        return $this;
    }

    public function exists(string $table,string $column)
    {
        $model=new Model;
        $stmt= $model->conn->prepare("SELECT * FROM {$table} WHERE {$column} = ?");
        $stmt->bind_param("s",$this->value);
        $stmt->execute();
        $result=$stmt->get_result();
        if($result->num_rows== 0)
        {
            $this->errors[$this->valueName][__FUNCTION__]= $this->valueName." Doesn't Exists";

        }
        return $this;
    }

    public function String()
    {
        if(! is_string($this->value))
        {
            
                $this->errors[$this->valueName][__FUNCTION__]=" {$this->valueName}. must be string";
            
        }
        return $this;
    }


    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the value of valueName
     *
     * @return  self
     */ 
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;

        return $this;
    }

    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

    public function getError(string $error) :? string
    {
        if(isset($this->errors[$error]))
        {
            foreach($this->errors[$error] AS $error)
            {
                return $error;
            }
        }
        return NULL;
    }

    public function getMessage (string $error) :? string
    {
       return $this->getError($error) !==NULL ?
        "<p class='text-danger font-weight-bold'>".$this->getError($error)."</p>"
        :
        NULL
        ;
    }

}