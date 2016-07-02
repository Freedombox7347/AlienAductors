<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Privileges'), ['controller' => 'Privileges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Privilege'), ['controller' => 'Privileges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exp Reviews'), ['controller' => 'ExpReviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exp Review'), ['controller' => 'ExpReviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Add Member') ?></legend>
        <?php
            echo $this->Form->input('First_Name');
            echo $this->Form->input('Last_Name');
            echo $this->Form->input('Age');
            echo $this->Form->input('location_id', ['options' => $locations, 'empty' => true]);
            echo $this->Form->input('Username');
            echo $this->Form->input('Email');
            echo $this->Form->input('Password');
            echo $this->Form->input('privilege_id', ['options' => $privileges]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
