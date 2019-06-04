<!-- src/Template/Authors/index.ctp -->

<h1>Authors</h1>
<?= $this->Html->link('Add Author', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Last Name(s)</th>
        <th>First Names(s)</th>
        <th>Date of Birth</th>
        <th>Date of Death</th>
        <th>Created</th>
    </tr>
    
    <!-- iterate through the authors data -->
    
    <?php foreach ($authors as $author): ?>
    <tr>
        <td>
            <?= $this->Html->link($author->surname, ['action' => 'view', $author->id]) ?>
        </td>
        <td>
            <?= $author->other_names ?>
        </td>
        <td>
            <?= $author->birth ?>
        </td>
        <td>
            <?= $author->death ?>
        </td>
        <td>
            <?= $author->created->format(DATE_RFC850) ?> 
        </td>
    </tr>
    <?php endforeach; ?>
</table>