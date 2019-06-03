<!-- src/Template/Authors/index.ctp -->

<h1>Authors</h1>
<table>
    <tr>
        <th>Last Name(s)</th>
        <th>First Names(s)</th>
        <th>Date of Birth</th>
        <th>Date of Death</th>
        <th>Created</th>
        <th>Last modified</th>
    </tr>
    
    <!-- iterate through the authors data -->
    
    <?php foreach ($authors as $author): ?>
    <tr>
        <td>
            <?= $author->surname ?>
        </td>
        <td>
            <?= $author->other_names ?>
        </td>
        <td>
            <?= $author->dob ?>
        </td>
        <td>
            <?= $author->dod ?>
        </td>
        <td>
            <?= $author->created->format(DATE_RFC850) ?> 
        </td>
        <td>
            <?= $author->modified->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>