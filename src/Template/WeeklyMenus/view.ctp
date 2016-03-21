<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Weekly Menu'), ['action' => 'edit', $weeklyMenu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Weekly Menu'), ['action' => 'delete', $weeklyMenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyMenu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Weekly Menus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weekly Menu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scheduled Meals'), ['controller' => 'ScheduledMeals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheduled Meal'), ['controller' => 'ScheduledMeals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="weeklyMenus view large-9 medium-8 columns content">
    <h3><?= h($weeklyMenu->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $weeklyMenu->has('user') ? $this->Html->link($weeklyMenu->user->id, ['controller' => 'Users', 'action' => 'view', $weeklyMenu->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($weeklyMenu->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Week Starting') ?></th>
            <td><?= h($weeklyMenu->week_starting) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($weeklyMenu->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($weeklyMenu->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Scheduled Meals') ?></h4>
        <?php if (!empty($weeklyMenu->scheduled_meals)): ?>
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
            <?php foreach ($weeklyMenu->scheduled_meals as $scheduledMeals): ?>
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
