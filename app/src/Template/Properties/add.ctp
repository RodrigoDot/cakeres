<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('List {0}', 'Properties'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'District'), ['controller' => 'Districts', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="properties col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add Property' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($property) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('title');
                                    echo $this->Form->input('description');
                                    echo $this->Form->input('value');
                                    echo $this->Form->input('type_id');
                                    echo $this->Form->input('district_id', ['options' => $districts]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
