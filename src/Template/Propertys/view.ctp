<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Property'), ['action' => 'edit', $property->prop_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property'), ['action' => 'delete', $property->prop_id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->prop_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Propertys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propertys view large-9 medium-8 columns content">
    <h3><?= h($property->prop_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Prop Street') ?></th>
            <td><?= h($property->prop_street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prop Suburb') ?></th>
            <td><?= h($property->prop_suburb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prop State') ?></th>
            <td><?= h($property->prop_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prop Pc') ?></th>
            <td><?= h($property->prop_pc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prop Id') ?></th>
            <td><?= $this->Number->format($property->prop_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prop Type') ?></th>
            <td><?= $this->Number->format($property->prop_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($property->price) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Prop Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($property->prop_desc)); ?>
    </div>
</div>
