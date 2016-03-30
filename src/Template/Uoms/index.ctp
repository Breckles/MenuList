<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Uom'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipe Ingredients'), ['controller' => 'RecipeIngredients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe Ingredient'), ['controller' => 'RecipeIngredients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="uoms index large-9 medium-8 columns content">
    <h3><?= __('Uoms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($uoms as $uom): ?>
            <tr>
                <td><?= $this->Number->format($uom->id) ?></td>
                <td><?= h($uom->name) ?></td>
                <td><?= h($uom->description) ?></td>
                <td><?= h($uom->created) ?></td>
                <td><?= h($uom->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $uom->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $uom->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $uom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uom->id)]) ?>
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
