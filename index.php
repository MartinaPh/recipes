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

        $pizzaSalami = new Ingredient();
        $pizzaSalami->setType('Salami');
        $pizzaSalami->setUnity('Stück');
        $pizzaSalami->setQuantity(5);
        
        $pizzaCheese = new Ingredient();
        $pizzaCheese->setType('Käse');
        $pizzaCheese->setUnity('Packungen');
        $pizzaCheese->setQuantity(7);
        
        $lasagneSalami = new Ingredient();
        $lasagneSalami->setType('Salami');
        $lasagneSalami->setUnity('schöne');
        $lasagneSalami->setQuantity(4);
        
        $lasagneCheese = new Ingredient();
        $lasagneCheese->setType('Käse');
        $lasagneCheese->setUnity('Räder');
        $lasagneCheese->setQuantity(3);
        
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
        $kartoffelsalatRecipe->setName('Kartoffelsalat')
                ->setDescription('Alles vermischen')
                ->setDuration(8)
                ->setPreparationTime(30)
                ->setIngredients
                ([$salatKartoffeln, $salatZwiebeln, $salatSaureGurken]);
        
        $pizzaRecipe = new Recipe;
        $pizzaRecipe->setName('Pizza')
                ->setDescription('Mix everything together')
                ->setDuration(5)
                ->setPreparationTime(20)
                ->setIngredients([$pizzaSalami, $pizzaCheese]);
        
        $lasagneRecipe = new Recipe;
        $lasagneRecipe->setName('Lasagne')
                ->setDescription('Alles in eine Form')
                ->setDuration(10000)
                ->setPreparationTime(20)
                ->setIngredients([$lasagneSalami, $lasagneCheese]);
        
        showRecipe($pizzaRecipe);
        echo '<br>';
        showRecipe($lasagneRecipe);
        echo '<br>';
        showRecipe($kartoffelsalatRecipe);
        
        
        ?>
    </body>
</html>