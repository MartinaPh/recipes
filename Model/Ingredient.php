<?php

class Ingredient 
{
    
private $type;

private $unity;

private $quantity;


public function getType()    
{
 return $this->type;  
}

public function setType($type)       
{
$this->type = $type;
}

public function getUnity()
{
    return $this->unity;
} 

public function setUnity($unity)
{
    $this->unity = $unity;
}

public function getQuantity()
{
    return $this->quantity;
}

public function setQuantity($quantity)
{
    $this->quantity = $quantity;
}


}