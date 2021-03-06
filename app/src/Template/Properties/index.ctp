<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('New {0}', ['Property']), ['action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Districts']), ['controller' => 'Districts', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['District']), ['controller' => 'Districts', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="properties col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Properties</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('title') ?></th>
                                        <th><?= $this->Paginator->sort('value') ?></th>
                                        <th><?= $this->Paginator->sort('type_id') ?></th>
                                        <th><?= $this->Paginator->sort('district_id') ?></th>
                                        <th><?= $this->Paginator->sort('created') ?></th>
                                        <th><?= $this->Paginator->sort('modified') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($properties as $property): ?>
                        <tr>
                                        <td><?= $this->Number->format($property->id) ?></td>
                                        <td><?= h($property->title) ?></td>
                                        <td><?= $this->Number->format($property->value) ?></td>
                                        <td><?= $this->Number->format($property->type_id) ?></td>
                                        <td><?= $property->has('district') ? $this->Html->link($property->district->title, ['controller' => 'Districts', 'action' => 'view', $property->district->id]) : '' ?></td>
                                        <td><?= h($property->created) ?></td>
                                        <td><?= h($property->modified) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $property->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id), 'class'=>'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                        <?= $this->Paginator->numbers(['escape'=>false]) ?>
                        <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>