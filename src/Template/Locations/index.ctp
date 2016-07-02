<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locations index large-9 medium-8 columns content">
    <h3><?= __('Locations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('State') ?></th>
                <th><?= $this->Paginator->sort('Country') ?></th>
                <th><?= $this->Paginator->sort('City') ?></th>
                <th><?= $this->Paginator->sort('Zipcode') ?></th>
                <th><?= $this->Paginator->sort('Address') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locations as $location): ?>
            <tr>
                <td><?= h($location->id) ?></td>
                <td><?= h($location->State) ?></td>
                <td><?= h($location->Country) ?></td>
                <td><?= h($location->City) ?></td>
                <td><?= h($location->Zipcode) ?></td>
                <td><?= h($location->Address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $location->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?>
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
