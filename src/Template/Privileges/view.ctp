<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Privilege'), ['action' => 'edit', $privilege->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Privilege'), ['action' => 'delete', $privilege->id], ['confirm' => __('Are you sure you want to delete # {0}?', $privilege->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Privileges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Privilege'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="privileges view large-9 medium-8 columns content">
    <h3><?= h($privilege->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($privilege->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Admin') ?></th>
            <td><?= $privilege->Admin ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $privilege->User ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Members') ?></h4>
        <?php if (!empty($privilege->members)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Age') ?></th>
                <th><?= __('Location Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Privilege Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($privilege->members as $members): ?>
            <tr>
                <td><?= h($members->id) ?></td>
                <td><?= h($members->First_Name) ?></td>
                <td><?= h($members->Last_Name) ?></td>
                <td><?= h($members->Age) ?></td>
                <td><?= h($members->location_id) ?></td>
                <td><?= h($members->Username) ?></td>
                <td><?= h($members->Email) ?></td>
                <td><?= h($members->Password) ?></td>
                <td><?= h($members->privilege_id) ?></td>
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
