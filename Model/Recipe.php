<?php

/**
 * A recipe
 * 
 * @author Martina Philippi <martina_philippi@hotmail.com>
 */
class Recipe
{
    /**
     * Name of the recipe
     * 
     * @var string
     */
    private $name = 'UNKNOWN';
    
    /**
     * The cooking instruction
     * 
     * @var type 
     */
    private $description = '';
    
    /**
     * The duration in minutes.
     * 
     * @var int 
     */
    private $duration = 0;

    /**
     * Preparation time
     * 
     * @var integer
     */
    private $preparationTime = 0;

    /**
     * A list of ingredients
     * 
     * @var Ingredient[]
     */
    private $ingredients = [];
    
     /**
     * Constructs a new recipe.
     */
    public function __construct()
    {
    }
    
    /**
     * Returns the name.
     * 
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * Sets the name.
     * 
     * @param string $name The name
     * 
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function setDescription(string $description): self
    {
        $this->description = $description;
        
        return $this;
    }


    /**
     * Returns the duration.
     * 
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }
    
    /**
     * Sets the duration.
     * 
     * @param int $duration
     * 
     * @return self
     */
    public function setDuration(int $duration): self
    {
        if ($duration > 99) {
            $duration = 99;
        }
        
        $this->duration = $duration;
        
        return $this;
    }
    
    /** Returns the preparation time.
     * 
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->preparationTime;
    }
    
    /**
     * Sets the preparation time.
     * 
     * @param int $preparationTime
     * 
     * @return self
     */
    public function setPreparationTime(int $preparationTime): self
    {
        $this->preparationTime = $preparationTime;
        
        return $this;
    }
    
    /**
     * Returns the total time.
     * 
     * @return int
     *
    public function getTotalTime(): int
    {
        return $this->totalTime + $this->totalTime;
    }
    
    
     * Sets the total time.
     * 
     * @param int $totalTime
     * 
     * @return self
     *
    public function setTotalTime(int $totalTime): self
    {
        $this->totalTime = $totalTime;
        
        return $this;
    }*/
    
    /**
     * Gets the ingredients.
     * 
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
    
    /**
     * Sets the ingredients.
     * 
     * @param array $ingredients
     * 
     * @return self
     */
    public function setIngredients(array $ingredients): self
    {
        $this->ingredients = $ingredients;
        
        return $this;
    }
}
