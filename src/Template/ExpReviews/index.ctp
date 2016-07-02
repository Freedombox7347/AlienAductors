<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exp Review'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Experiences'), ['controller' => 'Experiences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Experience'), ['controller' => 'Experiences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expReviews index large-9 medium-8 columns content">
    <h3><?= __('Exp Reviews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Exp_Rating') ?></th>
                <th><?= $this->Paginator->sort('member_id') ?></th>
                <th><?= $this->Paginator->sort('experience_id') ?></th>
                <th><?= $this->Paginator->sort('Recommend') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expReviews as $expReview): ?>
            <tr>
                <td><?= h($expReview->id) ?></td>
                <td><?= $this->Number->format($expReview->Exp_Rating) ?></td>
                <td><?= $expReview->has('member') ? $this->Html->link($expReview->member->id, ['controller' => 'Members', 'action' => 'view', $expReview->member->id]) : '' ?></td>
                <td><?= $expReview->has('experience') ? $this->Html->link($expReview->experience->id, ['controller' => 'Experiences', 'action' => 'view', $expReview->experience->id]) : '' ?></td>
                <td><?= h($expReview->Recommend) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expReview->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expReview->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expReview->id)]) ?>
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
