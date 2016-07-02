<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Privileges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="privileges form large-9 medium-8 columns content">
    <?= $this->Form->create($privilege) ?>
    <fieldset>
        <legend><?= __('Add Privilege') ?></legend>
        <?php
            echo $this->Form->input('Admin');
            echo $this->Form->input('User');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
