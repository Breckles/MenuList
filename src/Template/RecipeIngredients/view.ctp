<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipe Ingredient'), ['action' => 'edit', $recipeIngredient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipe Ingredient'), ['action' => 'delete', $recipeIngredient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipeIngredient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ingredients'), ['controller' => 'Ingredients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingredient'), ['controller' => 'Ingredients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Uoms'), ['controller' => 'Uoms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uom'), ['controller' => 'Uoms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipeIngredients view large-9 medium-8 columns content">
    <h3><?= h($recipeIngredient->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Recipe') ?></th>
            <td><?= $recipeIngredient->has('recipe') ? $this->Html->link($recipeIngredient->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipeIngredient->recipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Ingredient') ?></th>
            <td><?= $recipeIngredient->has('ingredient') ? $this->Html->link($recipeIngredient->ingredient->name, ['controller' => 'Ingredients', 'action' => 'view', $recipeIngredient->ingredient->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Uom') ?></th>
            <td><?= $recipeIngredient->has('uom') ? $this->Html->link($recipeIngredient->uom->id, ['controller' => 'Uoms', 'action' => 'view', $recipeIngredient->uom->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipeIngredient->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($recipeIngredient->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($recipeIngredient->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($recipeIngredient->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Instructions') ?></h4>
        <?= $this->Text->autoParagraph(h($recipeIngredient->instructions)); ?>
    </div>
</div>
