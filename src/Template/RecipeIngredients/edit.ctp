<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipeIngredient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipeIngredient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ingredients'), ['controller' => 'Ingredients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingredient'), ['controller' => 'Ingredients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Uoms'), ['controller' => 'Uoms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Uom'), ['controller' => 'Uoms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipeIngredients form large-9 medium-8 columns content">
    <?= $this->Form->create($recipeIngredient) ?>
    <fieldset>
        <legend><?= __('Edit Recipe Ingredient') ?></legend>
        <?php
            echo $this->Form->input('recipe_id', ['options' => $recipes]);
            echo $this->Form->input('ingredient_id', ['options' => $ingredients]);
            echo $this->Form->input('quantity');
            echo $this->Form->input('uom_id', ['options' => $uoms]);
            echo $this->Form->input('instructions');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
