<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locations view large-9 medium-8 columns content">
    <h3><?= h($location->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($location->id) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($location->State) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($location->Country) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($location->City) ?></td>
        </tr>
        <tr>
            <th><?= __('Zipcode') ?></th>
            <td><?= h($location->Zipcode) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($location->Address) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Members') ?></h4>
        <?php if (!empty($location->members)): ?>
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
            <?php foreach ($location->members as $members): ?>
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
