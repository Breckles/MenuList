<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ingredient'), ['action' => 'edit', $ingredient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ingredient'), ['action' => 'delete', $ingredient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingredient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ingredients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingredient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['controller' => 'RecipeIngredients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['controller' => 'RecipeIngredients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ingredients view large-9 medium-8 columns content">
    <h3><?= h($ingredient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($ingredient->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $ingredient->has('category') ? $this->Html->link($ingredient->category->id, ['controller' => 'Categories', 'action' => 'view', $ingredient->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ingredient->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($ingredient->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($ingredient->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Recipe Ingredients') ?></h4>
        <?php if (!empty($ingredient->recipe_ingredients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recipe Id') ?></th>
                <th><?= __('Ingredient Id') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Uom Id') ?></th>
                <th><?= __('Instructions') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ingredient->recipe_ingredients as $recipeIngredients): ?>
            <tr>
                <td><?= h($recipeIngredients->id) ?></td>
                <td><?= h($recipeIngredients->recipe_id) ?></td>
                <td><?= h($recipeIngredients->ingredient_id) ?></td>
                <td><?= h($recipeIngredients->quantity) ?></td>
                <td><?= h($recipeIngredients->uom_id) ?></td>
                <td><?= h($recipeIngredients->instructions) ?></td>
                <td><?= h($recipeIngredients->created) ?></td>
                <td><?= h($recipeIngredients->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RecipeIngredients', 'action' => 'view', $recipeIngredients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RecipeIngredients', 'action' => 'edit', $recipeIngredients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RecipeIngredients', 'action' => 'delete', $recipeIngredients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipeIngredients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
