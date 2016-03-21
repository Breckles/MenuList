<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipe'), ['action' => 'edit', $recipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipe'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['controller' => 'RecipeIngredients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['controller' => 'RecipeIngredients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scheduled Meals'), ['controller' => 'ScheduledMeals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheduled Meal'), ['controller' => 'ScheduledMeals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipes view large-9 medium-8 columns content">
    <h3><?= h($recipe->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $recipe->has('user') ? $this->Html->link($recipe->user->id, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($recipe->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($recipe->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipe->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Served') ?></th>
            <td><?= $this->Number->format($recipe->num_served) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($recipe->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($recipe->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Private') ?></th>
            <td><?= $recipe->private ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($recipe->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Instructions') ?></h4>
        <?= $this->Text->autoParagraph(h($recipe->instructions)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Recipe Ingredients') ?></h4>
        <?php if (!empty($recipe->recipe_ingredients)): ?>
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
            <?php foreach ($recipe->recipe_ingredients as $recipeIngredients): ?>
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
    <div class="related">
        <h4><?= __('Related Scheduled Meals') ?></h4>
        <?php if (!empty($recipe->scheduled_meals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recipe Id') ?></th>
                <th><?= __('Meal') ?></th>
                <th><?= __('Weekly Menu Id') ?></th>
                <th><?= __('Weekday') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($recipe->scheduled_meals as $scheduledMeals): ?>
            <tr>
                <td><?= h($scheduledMeals->id) ?></td>
                <td><?= h($scheduledMeals->recipe_id) ?></td>
                <td><?= h($scheduledMeals->meal) ?></td>
                <td><?= h($scheduledMeals->weekly_menu_id) ?></td>
                <td><?= h($scheduledMeals->weekday) ?></td>
                <td><?= h($scheduledMeals->created) ?></td>
                <td><?= h($scheduledMeals->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ScheduledMeals', 'action' => 'view', $scheduledMeals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ScheduledMeals', 'action' => 'edit', $scheduledMeals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ScheduledMeals', 'action' => 'delete', $scheduledMeals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheduledMeals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
