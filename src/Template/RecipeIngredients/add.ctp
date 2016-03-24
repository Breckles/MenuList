
<div class="recipeIngredients form large-9 medium-8 columns content createForm">
    <?= $this->Form->create($recipeIngredient, ['url' => false]) ?>
    <fieldset>
        <legend><?= __('Add Recipe Ingredient') ?></legend>
        <?php
            // echo $this->Form->input('recipe_id', ['options' => $recipes]);
            echo $this->Form->input('ingredient_id', ['options' => $ingredients]);
            echo $this->Form->input('quantity', ['ng-model' => 'recipeIngrdient.quantity']);
            echo $this->Form->input('uom_id', ['options' => $uoms]);
            echo $this->Form->input('instructions');
        ?>
    </fieldset>
    <!-- <?= $this->Form->button(__('Submit')) ?> -->
    <?= $this->Form->end() ?>
</div>
