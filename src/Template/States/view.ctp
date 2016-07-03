<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="states view large-9 medium-8 columns content">
    <h3><?= h($state->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($state->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($state->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= $state->has('country') ? $this->Html->link($state->country->name, ['controller' => 'Countries', 'action' => 'view', $state->country->id]) : '' ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Members') ?></h4>
        <?php if (!empty($state->members)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Admin') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Age') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('State Id') ?></th>
                <th><?= __('Country Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->members as $members): ?>
            <tr>
                <td><?= h($members->id) ?></td>
                <td><?= h($members->admin) ?></td>
                <td><?= h($members->Username) ?></td>
                <td><?= h($members->Password) ?></td>
                <td><?= h($members->Email) ?></td>
                <td><?= h($members->First_Name) ?></td>
                <td><?= h($members->Last_Name) ?></td>
                <td><?= h($members->Age) ?></td>
                <td><?= h($members->city) ?></td>
                <td><?= h($members->state_id) ?></td>
                <td><?= h($members->country_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Members', 'action' => 'view', $members->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Members', 'action' => 'edit', $members->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Members', 'action' => 'delete', $members->id], ['confirm' => __('Are you sure you want to delete # {0}?', $members->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
