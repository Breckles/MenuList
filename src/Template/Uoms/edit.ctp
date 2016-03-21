<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $uom->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $uom->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Uoms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['controller' => 'RecipeIngredients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['controller' => 'RecipeIngredients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="uoms form large-9 medium-8 columns content">
    <?= $this->Form->create($uom) ?>
    <fieldset>
        <legend><?= __('Edit Uom') ?></legend>
        <?php
            echo $this->Form->input('uom');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
