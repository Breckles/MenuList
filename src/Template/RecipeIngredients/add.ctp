<div class="recipeIngredients form large-9 medium-8 columns content">
    <?= $this->Form->create($recipeIngredient, ['url' => false, 'ng-submit' => 'addRecipeIngredient()']) ?>
    <fieldset>
        <legend><?= __('Add Recipe Ingredient') ?></legend>
        <?php
            // echo $this->Form->input('recipe_id', ['options' => $recipes]);
            echo $this->Form->input('ingredient_id', ['options' => $ingredients, 'ng-model' => 'newRecipeIngredient.ingredient_id', 'class' => 'required']);
            echo $this->Form->input('quantity', ['min' => 1, 'ng-model' => 'newRecipeIngredient.quantity']);
            echo $this->Form->input('uom_id', ['options' => $uoms, 'ng-model' => 'newRecipeIngredient.uom_id']);
            echo $this->Form->input('instructions', ['ng-model' => 'newRecipeIngredient.instructions']);
        ?>
    </fieldset>
    <button type="submit" class="btn addRecipeIngredientButton">
        Add Recipe Ingredient
    </button>
    <?= $this->Form->end() ?>
</div>