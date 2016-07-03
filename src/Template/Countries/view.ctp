<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="countries view large-9 medium-8 columns content">
    <h3><?= h($country->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($country->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sortname') ?></th>
            <td><?= h($country->sortname) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($country->name) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Members') ?></h4>
        <?php if (!empty($country->members)): ?>
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
            <?php foreach ($country->members as $members): ?>
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
    <div class="related">
        <h4><?= __('Related States') ?></h4>
        <?php if (!empty($country->states)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Country Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->states as $states): ?>
            <tr>
                <td><?= h($states->id) ?></td>
                <td><?= h($states->name) ?></td>
                <td><?= h($states->country_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'States', 'action' => 'view', $states->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'States', 'action' => 'edit', $states->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'States', 'action' => 'delete', $states->id], ['confirm' => __('Are you sure you want to delete # {0}?', $states->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
