<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['District']), ['action' => 'edit', $district->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['District']), ['action' => 'delete', $district->id], ['confirm' => __('Are you sure you want to delete # {0}?', $district->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Districts']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['District']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Properties']), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Property']), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="districts col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($district->title) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Title</th>
                        <td><?= h($district->title) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($district->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($district->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($district->modified) ?></tr>
                    </tr>
                                                    </table>
                                        <div class="related">
                    <?php if (!empty($district->properties)): ?>
                    <h4><?= __('Related {0}', ['Properties']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Value</th>
                                        <th>Type Id</th>
                                        <th>District Id</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($district->properties as $properties): ?>
                        <tr>
                            <td><?= h($properties->id) ?></td>
                            <td><?= h($properties->title) ?></td>
                            <td><?= h($properties->description) ?></td>
                            <td><?= h($properties->value) ?></td>
                            <td><?= h($properties->type_id) ?></td>
                            <td><?= h($properties->district_id) ?></td>
                            <td><?= h($properties->created) ?></td>
                            <td><?= h($properties->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Properties', 'action' => 'view', $properties->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Properties', 'action' => 'edit', $properties->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Properties', 'action' => 'delete', $properties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $properties->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
