<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['controller' => 'ExpReviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exp Review'), ['controller' => 'ExpReviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="members index large-9 medium-8 columns content">
    <h3><?= __('Members') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('admin') ?></th>
                <th><?= $this->Paginator->sort('Username') ?></th>
                <th><?= $this->Paginator->sort('Password') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('First_Name') ?></th>
                <th><?= $this->Paginator->sort('Last_Name') ?></th>
                <th><?= $this->Paginator->sort('Age') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('state_id') ?></th>
                <th><?= $this->Paginator->sort('country_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
            <tr>
                <td><?= h($member->id) ?></td>
                <td><?= h($member->admin) ?></td>
                <td><?= h($member->Username) ?></td>
                <td><?= h($member->Password) ?></td>
                <td><?= h($member->Email) ?></td>
                <td><?= h($member->First_Name) ?></td>
                <td><?= h($member->Last_Name) ?></td>
                <td><?= $this->Number->format($member->Age) ?></td>
                <td><?= h($member->city) ?></td>
                <td><?= $member->has('state') ? $this->Html->link($member->state->name, ['controller' => 'States', 'action' => 'view', $member->state->id]) : '' ?></td>
                <td><?= $member->has('country') ? $this->Html->link($member->country->name, ['controller' => 'Countries', 'action' => 'view', $member->country->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $member->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
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
