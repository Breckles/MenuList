<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Uom'), ['action' => 'edit', $uom->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Uom'), ['action' => 'delete', $uom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uom->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Uoms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uom'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['controller' => 'RecipeIngredients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['controller' => 'RecipeIngredients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="uoms view large-9 medium-8 columns content">
    <h3><?= h($uom->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Uom') ?></th>
            <td><?= h($uom->uom) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($uom->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($uom->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($uom->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($uom->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Recipe Ingredients') ?></h4>
        <?php if (!empty($uom->recipe_ingredients)): ?>
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
            <?php foreach ($uom->recipe_ingredients as $recipeIngredients): ?>
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
