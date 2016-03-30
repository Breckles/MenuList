<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ingredients'), ['controller' => 'Ingredients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingredient'), ['controller' => 'Ingredients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Uoms'), ['controller' => 'Uoms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Uom'), ['controller' => 'Uoms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipeIngredients index large-9 medium-8 columns content">
    <h3><?= __('Recipe Ingredients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('recipe_id') ?></th>
                <th><?= $this->Paginator->sort('ingredient_id') ?></th>
                <th><?= $this->Paginator->sort('quantity') ?></th>
                <th><?= $this->Paginator->sort('uom_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipeIngredients as $recipeIngredient): ?>
            <tr>
                <td><?= $this->Number->format($recipeIngredient->id) ?></td>
                <td><?= $recipeIngredient->has('recipe') ? $this->Html->link($recipeIngredient->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipeIngredient->recipe->id]) : '' ?></td>
                <td><?= $recipeIngredient->has('ingredient') ? $this->Html->link($recipeIngredient->ingredient->name, ['controller' => 'Ingredients', 'action' => 'view', $recipeIngredient->ingredient->id]) : '' ?></td>
                <td><?= $this->Number->format($recipeIngredient->quantity) ?></td>
                <td><?= $recipeIngredient->has('uom') ? $this->Html->link($recipeIngredient->uom->id, ['controller' => 'Uoms', 'action' => 'view', $recipeIngredient->uom->id]) : '' ?></td>
                <td><?= h($recipeIngredient->created) ?></td>
                <td><?= h($recipeIngredient->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recipeIngredient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipeIngredient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipeIngredient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipeIngredient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
