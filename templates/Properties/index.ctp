<!-- Search Form -->
<?= $this->Form->create(null, ['type' => 'get']) ?>
<?= $this->Form->input('keyword', ['label' => 'Search']) ?>
<?= $this->Form->submit('Search') ?>
<?= $this->Form->end() ?>

<!-- Properties List -->
<h2>Properties</h2>
<ul>
    <?php foreach ($properties as $property): ?>
        <li><?= $this->Html->link($property->title, ['action' => 'view', $property->id]) ?></li>
    <?php endforeach; ?>
</ul>
