<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiore[]|\Cake\Collection\CollectionInterface $fiore
 */
?>
<div class="fiore index content">
    <?= $this->Html->link(__('New Fiore'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fiore') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('occasion_id') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fiore as $fiore): ?>
                <tr>
                    <td><?= $this->Number->format($fiore->id) ?></td>
                    <td><?= h($fiore->name) ?></td>
                    <td><?= $fiore->has('occasion') ? $this->Html->link($fiore->occasion->name, ['controller' => 'Occasions', 'action' => 'view', $fiore->occasion->id]) : '' ?></td>
                    <td><?= $this->Number->format($fiore->cost) ?></td>
                    <td><?= $this->Number->format($fiore->quantity) ?></td>
                    <td><?= h($fiore->created) ?></td>
                    <td><?= h($fiore->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $fiore->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fiore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fiore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiore->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
