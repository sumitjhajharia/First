<!-- File: src/Template/Posts/add.ctp -->

<h1>Add Blog Post</h1>
<?php
    echo $this->Form->create($post);
    echo $this->Form->input('title');
    echo $this->Form->input('description', ['rows' => '3']);
    echo $this->Form->button(__('Save Post'));
    echo $this->Form->end();
?>
