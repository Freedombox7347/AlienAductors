<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $expReview->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expReview->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Experiences'), ['controller' => 'Experiences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Experience'), ['controller' => 'Experiences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expReviews form large-9 medium-8 columns content">
    <?= $this->Form->create($expReview) ?>
    <fieldset>
        <legend><?= __('Edit Exp Review') ?></legend>
        <?php
            echo $this->Form->input('Review');
            echo $this->Form->input('Exp_Rating');
            echo $this->Form->input('member_id', ['options' => $members]);
            echo $this->Form->input('experience_id', ['options' => $experiences]);
            echo $this->Form->input('Recommend');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
