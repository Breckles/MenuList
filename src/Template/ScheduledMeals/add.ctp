<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Scheduled Meals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weekly Menus'), ['controller' => 'WeeklyMenus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weekly Menu'), ['controller' => 'WeeklyMenus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scheduledMeals form large-9 medium-8 columns content">
    <?= $this->Form->create($scheduledMeal) ?>
    <fieldset>
        <legend><?= __('Add Scheduled Meal') ?></legend>
        <?php
            echo $this->Form->input('recipe_id', ['options' => $recipes]);
            echo $this->Form->input('meal');
            echo $this->Form->input('weekly_menu_id', ['options' => $weeklyMenus]);
            echo $this->Form->input('weekday');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
