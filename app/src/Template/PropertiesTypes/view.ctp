<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Properties Type']), ['action' => 'edit', $propertiesType->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Properties Type']), ['action' => 'delete', $propertiesType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertiesType->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Properties Types']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Properties Type']), ['action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="propertiesTypes col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($propertiesType->title) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Title</th>
                        <td><?= h($propertiesType->title) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($propertiesType->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($propertiesType->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($propertiesType->modified) ?></tr>
                    </tr>
                                                    </table>
                                </div>
    </div>
</div>
