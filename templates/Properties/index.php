<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Property> $properties
 */
?>
   

<div class="properties index content">
   
    
     <!-- Add search form -->
     <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->control('keyword', ['label' => 'Search']) ?>
    <?= $this->Form->submit('Search') ?>
    <?= $this->Form->end() ?>
    <!-- End of search form -->
    <div class="table-responsive">
        <!-- Rest of the table code remains unchanged -->
    </div>
    <?= $this->Html->link(__('New Property'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Properties') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('zip_code') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('bedrooms') ?></th>
                    <th><?= $this->Paginator->sort('bathrooms') ?></th>
                    <th><?= $this->Paginator->sort('area_sqft') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($properties as $property): ?>
                <tr>
                    <td><?= $this->Number->format($property->id) ?></td>
                    <td><?= h($property->title) ?></td>
                    <td><?= h($property->address) ?></td>
                    <td><?= h($property->city) ?></td>
                    <td><?= h($property->state) ?></td>
                    <td><?= h($property->zip_code) ?></td>
                    <td><?= $property->price === null ? '' : $this->Number->format($property->price) ?></td>
                    <td><?= $property->bedrooms === null ? '' : $this->Number->format($property->bedrooms) ?></td>
                    <td><?= $property->bathrooms === null ? '' : $this->Number->format($property->bathrooms) ?></td>
                    <td><?= $property->area_sqft === null ? '' : $this->Number->format($property->area_sqft) ?></td>
                    <td><?= h($property->created_at) ?></td>
                    <td><?= h($property->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $property->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    

    <!-- Paginator-->
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
