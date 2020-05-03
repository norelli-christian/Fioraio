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
            <?= $this->Html->link(__('Edit Fiore'), ['action' => 'edit', $fiore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fiore'), ['action' => 'delete', $fiore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fiore'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fiore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fiore view content">
            <h3><?= h($fiore->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($fiore->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occasion') ?></th>
                    <td><?= $fiore->has('occasion') ? $this->Html->link($fiore->occasion->name, ['controller' => 'Occasions', 'action' => 'view', $fiore->occasion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fiore->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($fiore->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($fiore->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($fiore->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($fiore->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
