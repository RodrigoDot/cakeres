<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Property']), ['action' => 'edit', $property->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Property']), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Properties']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Property']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Districts']), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['District']), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="properties col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($property->title) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Title</th>
                        <td><?= h($property->title) ?></td>
                    </tr>
                                                        <tr>
                        <th>District</th>
                        <td><?= $property->has('district') ? $this->Html->link($property->district->title, ['controller' => 'Districts', 'action' => 'view', $property->district->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($property->id) ?></td>
                    </tr>
                                <tr>
                        <th>Value</th>
                        <td><?= $this->Number->format($property->value) ?></td>
                    </tr>
                                <tr>
                        <th>Type Id</th>
                        <td><?= $this->Number->format($property->type_id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($property->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($property->modified) ?></tr>
                    </tr>
                                                    </table>
                                        <div class="row">
                    <h4>Description</h4>
                    <?= $this->Text->autoParagraph(h($property->description)); ?>
                </div>
                                            </div>
    </div>
</div>
