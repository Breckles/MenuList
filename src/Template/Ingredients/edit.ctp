<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ingredient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ingredient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ingredients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['controller' => 'RecipeIngredients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['controller' => 'RecipeIngredients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingredients form large-9 medium-8 columns content">
    <?= $this->Form->create($ingredient) ?>
    <fieldset>
        <legend><?= __('Edit Ingredient') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('information');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
