<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['controller' => 'RecipeIngredients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['controller' => 'RecipeIngredients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scheduled Meals'), ['controller' => 'ScheduledMeals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Scheduled Meal'), ['controller' => 'ScheduledMeals', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="recipes form large-9 medium-8 columns content createForm">
    <?= $this->Form->create($recipe, ['url' => false, 'ng-submit' => 'submit()']) ?>
    <fieldset>
        <legend><?= __('Add Recipe') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('instructions');
            echo $this->Form->input('num_served');
            echo $this->Form->input('image');
            echo $this->Form->input('private');            
        ?>
    </fieldset>
    <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
        <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
    </div>    
    <?= $this->Form->end() ?>
</div>
