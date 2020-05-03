<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiore $fiore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fiore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fiore->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Fiore'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fiore form content">
            <?= $this->Form->create($fiore) ?>
            <fieldset>
                <legend><?= __('Edit Fiore') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('occasion_id', ['options' => $occasions]);
                    echo $this->Form->control('cost');
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
