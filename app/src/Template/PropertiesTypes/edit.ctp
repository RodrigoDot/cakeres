<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $propertiesType->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $propertiesType->id)]
                    )
                ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Properties Types'), ['action' => 'index']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="propertiesTypes col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Properties Type' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($propertiesType) ?>
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
