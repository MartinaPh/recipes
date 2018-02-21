<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './Model/Recipe.php';
        include './View/Recipe.php';
        include './Model/Ingredient.php';
        include './Model/Chapter.php';
        include './View/Chapter.php';

        $pizzaSalami = new Ingredient();
        $pizzaSalami->setType('Salami');
        $pizzaSalami->setUnity('Stück');
        $pizzaSalami->setQuantity(5);
        
        $pizzaCheese = new Ingredient();
        $pizzaCheese->setType('Käse');
        $pizzaCheese->setUnity('Packungen');
        $pizzaCheese->setQuantity(7);
        
        $salatKartoffeln = new Ingredient();
        $salatKartoffeln->setType('Kartoffeln');
        $salatKartoffeln->setUnity('kg');
        $salatKartoffeln->setQuantity(1);
        
        $salatZwiebeln = new Ingredient();
        $salatZwiebeln->setType('Zwiebel');
        $salatZwiebeln->setUnity('halbe');
        $salatZwiebeln->setQuantity(1);
                
        $salatSaureGurken = new Ingredient();
        $salatSaureGurken->setType('saure Gurken');
        $salatSaureGurken->setUnity('Glas');
        $salatSaureGurken->setQuantity(1);
         
        $kartoffelsalatRecipe = new Recipe;
        $kartoffelsalatRecipe->setName('Kartoffelsalat');
        $kartoffelsalatRecipe->description = 'Alles vermischen';
        $kartoffelsalatRecipe->setDuration(5);
        $kartoffelsalatRecipe->setPreparationTime(30);
        $kartoffelsalatRecipe->setIngredients([$salatKartoffeln, $salatZwiebeln, $salatSaureGurken]);
        
        $pizzaRecipe = new Recipe;
        $pizzaRecipe->setName('Pizza');
        $pizzaRecipe->description = 'Mix everything together';
        $pizzaRecipe->setDuration(5)
                ->setPreparationTime(20);
        $pizzaRecipe->setIngredients([$pizzaSalami, $pizzaCheese]);
        
        $lasagneRecipe = new Recipe;
        $lasagneRecipe->setName('Lasagne')
                ->description = 'Egal...';
        $lasagneRecipe->setDuration(10000);
        
        
        /*
        
        $vorspeise = new Chapter();
        
        $hauptspeise = new Chapter();
        
        $salat = new Chapter();
        
        $dessert = new Chapter();
        
        
        showChapter($vorspeise);
        echo '<br>';
        showChapter($hauptspeise);
        echo '<br>';
        showChapter($salat);
        echo '<br>';
        showChapter($dessert);
        */
        
        showRecipe($pizzaRecipe);
        echo '<br>';
        showRecipe($lasagneRecipe);
        echo '<br>';
        showRecipe($kartoffelsalatRecipe);
        
        
        ?>
    </body>
</html>