<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Scheduled Meal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weekly Menus'), ['controller' => 'WeeklyMenus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weekly Menu'), ['controller' => 'WeeklyMenus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scheduledMeals index large-9 medium-8 columns content">
    <h3><?= __('Scheduled Meals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('recipe_id') ?></th>
                <th><?= $this->Paginator->sort('meal') ?></th>
                <th><?= $this->Paginator->sort('weekly_menu_id') ?></th>
                <th><?= $this->Paginator->sort('weekday') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scheduledMeals as $scheduledMeal): ?>
            <tr>
                <td><?= $this->Number->format($scheduledMeal->id) ?></td>
                <td><?= $scheduledMeal->has('recipe') ? $this->Html->link($scheduledMeal->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $scheduledMeal->recipe->id]) : '' ?></td>
                <td><?= h($scheduledMeal->meal) ?></td>
                <td><?= $scheduledMeal->has('weekly_menu') ? $this->Html->link($scheduledMeal->weekly_menu->id, ['controller' => 'WeeklyMenus', 'action' => 'view', $scheduledMeal->weekly_menu->id]) : '' ?></td>
                <td><?= h($scheduledMeal->weekday) ?></td>
                <td><?= h($scheduledMeal->created) ?></td>
                <td><?= h($scheduledMeal->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $scheduledMeal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scheduledMeal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scheduledMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheduledMeal->id)]) ?>
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
