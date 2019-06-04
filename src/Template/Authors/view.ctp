<!-- File: src/Template/Authors/view.ctp -->

<?php
    $fullName = $author->surname . ', ' . $author->other_names;
?>

<h1><?= h($fullName) ?></h1>
<p><b>Year of birth:</b> <?= h($author->birth) ?></p>
<p><b>Year of death:</b> <?= h($author->death) ?></p>
<p><b>Place of birth:</b> <?= h($author->place_of_birth) ?></p>
<p><b>Place of death:</b> <?= h($author->place_of_death) ?></p>
<p>
    <small>Created: <?= $author->created->format(DATE_RFC850) ?> | Last modified: <?= $author->modified->format(DATE_RFC850) ?></small>
</p>
<p>
        <?= $this->Html->link('Edit', ['action' => 'edit', $author->id]) ?>
</p>