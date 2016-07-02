<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Experience'), ['action' => 'edit', $experience->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Experience'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['controller' => 'ExpReviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exp Review'), ['controller' => 'ExpReviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="experiences view large-9 medium-8 columns content">
    <h3><?= h($experience->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($experience->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Exp Name') ?></th>
            <td><?= h($experience->Exp_Name) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($experience->Description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Exp Reviews') ?></h4>
        <?php if (!empty($experience->exp_reviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Review') ?></th>
                <th><?= __('Exp Rating') ?></th>
                <th><?= __('Member Id') ?></th>
                <th><?= __('Experience Id') ?></th>
                <th><?= __('Recommend') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($experience->exp_reviews as $expReviews): ?>
            <tr>
                <td><?= h($expReviews->id) ?></td>
                <td><?= h($expReviews->Review) ?></td>
                <td><?= h($expReviews->Exp_Rating) ?></td>
                <td><?= h($expReviews->member_id) ?></td>
                <td><?= h($expReviews->experience_id) ?></td>
                <td><?= h($expReviews->Recommend) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ExpReviews', 'action' => 'view', $expReviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ExpReviews', 'action' => 'edit', $expReviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ExpReviews', 'action' => 'delete', $expReviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expReviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
