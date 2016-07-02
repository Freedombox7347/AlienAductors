<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Exp Review'), ['action' => 'edit', $expReview->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Exp Review'), ['action' => 'delete', $expReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expReview->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exp Review'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['controller' => 'Experiences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['controller' => 'Experiences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expReviews view large-9 medium-8 columns content">
    <h3><?= h($expReview->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($expReview->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Member') ?></th>
            <td><?= $expReview->has('member') ? $this->Html->link($expReview->member->id, ['controller' => 'Members', 'action' => 'view', $expReview->member->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Experience') ?></th>
            <td><?= $expReview->has('experience') ? $this->Html->link($expReview->experience->id, ['controller' => 'Experiences', 'action' => 'view', $expReview->experience->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Exp Rating') ?></th>
            <td><?= $this->Number->format($expReview->Exp_Rating) ?></td>
        </tr>
        <tr>
            <th><?= __('Recommend') ?></th>
            <td><?= $expReview->Recommend ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Review') ?></h4>
        <?= $this->Text->autoParagraph(h($expReview->Review)); ?>
    </div>
</div>
