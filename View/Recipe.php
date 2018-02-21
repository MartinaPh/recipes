<?php

function showRecipe(Recipe $recipe)
{
        echo '<h2>' . $recipe->getName() . '</h2>';
        echo '<br />';
        echo '<br />' . $recipe->description;
        echo '<br />';
        echo '<br />Duration: ' . $recipe->getDuration();
        echo '<br />Preparation: ' . $recipe->getPreparationTime();
        echo '<br />Total time: ' . $recipe->getTotalTime();
        if (!empty($recipe->getIngredients())) {
            echo '<h3>Ingredients:</h3>';
        }
        foreach ($recipe->getIngredients() as $ingredient) {
            echo '<br />';
            echo $ingredient->getQuantity() . ' ';
            echo $ingredient->getUnity() . ' ';
            echo $ingredient->getType();
           
            
        }
}