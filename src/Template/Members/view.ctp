<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Privileges'), ['controller' => 'Privileges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Privilege'), ['controller' => 'Privileges', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['controller' => 'ExpReviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exp Review'), ['controller' => 'ExpReviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($member->id) ?></td>
        </tr>
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($member->First_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($member->Last_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Location') ?></th>
            <td><?= $member->has('location') ? $this->Html->link($member->location->id, ['controller' => 'Locations', 'action' => 'view', $member->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($member->Username) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($member->Email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($member->Password) ?></td>
        </tr>
        <tr>
            <th><?= __('Privilege') ?></th>
            <td><?= $member->has('privilege') ? $this->Html->link($member->privilege->id, ['controller' => 'Privileges', 'action' => 'view', $member->privilege->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Age') ?></th>
            <td><?= $this->Number->format($member->Age) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Exp Reviews') ?></h4>
        <?php if (!empty($member->exp_reviews)): ?>
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
            <?php foreach ($member->exp_reviews as $expReviews): ?>
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