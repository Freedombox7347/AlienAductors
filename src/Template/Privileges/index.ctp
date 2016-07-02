<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Privilege'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="privileges index large-9 medium-8 columns content">
    <h3><?= __('Privileges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Admin') ?></th>
                <th><?= $this->Paginator->sort('User') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($privileges as $privilege): ?>
            <tr>
                <td><?= h($privilege->id) ?></td>
                <td><?= h($privilege->Admin) ?></td>
                <td><?= h($privilege->User) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $privilege->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $privilege->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $privilege->id], ['confirm' => __('Are you sure you want to delete # {0}?', $privilege->id)]) ?>
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
