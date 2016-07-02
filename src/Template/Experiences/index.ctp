<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Experience'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['controller' => 'ExpReviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exp Review'), ['controller' => 'ExpReviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="experiences index large-9 medium-8 columns content">
    <h3><?= __('Experiences') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Exp_Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($experiences as $experience): ?>
            <tr>
                <td><?= h($experience->id) ?></td>
                <td><?= h($experience->Exp_Name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $experience->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experience->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?>
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
