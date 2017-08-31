<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('New {0}', ['District']), ['action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Properties']), ['controller' => 'Properties', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['Property']), ['controller' => 'Properties', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="districts col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Districts</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('title') ?></th>
                                        <th><?= $this->Paginator->sort('created') ?></th>
                                        <th><?= $this->Paginator->sort('modified') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($districts as $district): ?>
                        <tr>
                                        <td><?= $this->Number->format($district->id) ?></td>
                                        <td><?= h($district->title) ?></td>
                                        <td><?= h($district->created) ?></td>
                                        <td><?= h($district->modified) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $district->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $district->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $district->id], ['confirm' => __('Are you sure you want to delete # {0}?', $district->id), 'class'=>'btn btn-danger btn-xs']) ?>
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