<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
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
            <th><?= __('Username') ?></th>
            <td><?= h($member->Username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($member->Password) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($member->Email) ?></td>
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
            <th><?= __('City') ?></th>
            <td><?= h($member->city) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= $member->has('state') ? $this->Html->link($member->state->name, ['controller' => 'States', 'action' => 'view', $member->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= $member->has('country') ? $this->Html->link($member->country->name, ['controller' => 'Countries', 'action' => 'view', $member->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Age') ?></th>
            <td><?= $this->Number->format($member->Age) ?></td>
        </tr>
        <tr>
            <th><?= __('Admin') ?></th>
            <td><?= $member->admin ? __('Yes') : __('No'); ?></td>
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
