<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('List {0}', 'Districts'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="districts col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add District' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($district) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('title');
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
