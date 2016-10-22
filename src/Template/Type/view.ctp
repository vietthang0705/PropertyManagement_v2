<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="type view large-9 medium-8 columns content">
    <h3><?= h($type->type_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type Name') ?></th>
            <td><?= h($type->type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Id') ?></th>
            <td><?= $this->Number->format($type->type_id) ?></td>
        </tr>
    </table>
</div>
