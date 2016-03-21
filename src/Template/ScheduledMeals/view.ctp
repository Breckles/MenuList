<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scheduled Meal'), ['action' => 'edit', $scheduledMeal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Scheduled Meal'), ['action' => 'delete', $scheduledMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheduledMeal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scheduled Meals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheduled Meal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Weekly Menus'), ['controller' => 'WeeklyMenus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weekly Menu'), ['controller' => 'WeeklyMenus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scheduledMeals view large-9 medium-8 columns content">
    <h3><?= h($scheduledMeal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Recipe') ?></th>
            <td><?= $scheduledMeal->has('recipe') ? $this->Html->link($scheduledMeal->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $scheduledMeal->recipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Meal') ?></th>
            <td><?= h($scheduledMeal->meal) ?></td>
        </tr>
        <tr>
            <th><?= __('Weekly Menu') ?></th>
            <td><?= $scheduledMeal->has('weekly_menu') ? $this->Html->link($scheduledMeal->weekly_menu->id, ['controller' => 'WeeklyMenus', 'action' => 'view', $scheduledMeal->weekly_menu->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Weekday') ?></th>
            <td><?= h($scheduledMeal->weekday) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($scheduledMeal->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($scheduledMeal->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($scheduledMeal->modified) ?></td>
        </tr>
    </table>
</div>
