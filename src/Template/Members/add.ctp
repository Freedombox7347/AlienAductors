<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['controller' => 'ExpReviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exp Review'), ['controller' => 'ExpReviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Add Member') ?></legend>
        <?php
            echo $this->Form->input('admin');
            echo $this->Form->input('Username');
            echo $this->Form->input('Password');
            echo $this->Form->input('Email');
            echo $this->Form->input('First_Name');
            echo $this->Form->input('Last_Name');
            echo $this->Form->input('Age');
            echo $this->Form->input('city');
            echo $this->Form->input('state_id', ['options' => $states, 'empty' => true]);
            echo $this->Form->input('country_id', ['options' => $countries, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
