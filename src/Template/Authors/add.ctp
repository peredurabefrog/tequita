<!-- File: src/Template/Authors/add.ctp -->

<h1>Add Author</h1>
<?php
    echo $this->Form->create($author);
    echo $this->Form->control('surname');
    echo $this->Form->control('other_names');
    echo $this->Form->control('birth');
    echo $this->Form->control('death');
    echo $this->Form->control('place_of_birth');
    echo $this->Form->control('place_of_death');
    echo $this->Form->button(__('Save Author'));
    echo $this->Form->end();
?>