<?php

class Ingredient 
{
    /**
     * Type of the ingredient.
     * 
     * @var type 
     */
private $type;

    /**
     * Unity of the quantity of the ingredient.
     * 
     * @var type 
     */
private $unity;

    /**
     * Quantity of the ingredient.
     * 
     * @var type 
     */
private $quantity;

    /**
     * Returns the type.
     * 
     * @return string
     */
     
public function getType(): string    
{
 return $this->type;  
}

    /**
     * Sets the type.
     * 
     * @param string $type
     */
public function setType(string $type): self       
{
$this->type = $type;

return $this;
}
    
    /**
     * Returns the unity.
     * 
     * @return string
     */
public function getUnity(): string
{
    return $this->unity;
} 

    /**
     * Sets the unity.
     * 
     * @param string $unity
     */
public function setUnity(string $unity): self
{
    $this->unity = $unity;
    
    return $this;
}

    /**
     * Returns the quantity.
     * 
     * @return int
     */
public function getQuantity(): int
{
    return $this->quantity;
}

    /**
     * Sets the quantity.
     * 
     * @param int $quantity
     */
public function setQuantity(int $quantity): self
{
    $this->quantity = $quantity;
    
    return $this;
}


}