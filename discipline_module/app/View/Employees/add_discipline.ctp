<h2><?php echo $employee['Employee']['firstn'] . ' ' . $employee['Employee']['lastn']; ?></h2>
<h1>Add Discipline</h1>
<?php
	echo $this->Form->create('Discipline');
	echo $this->Form->input('description');
	echo $this->Form->end('Save Discipline');
?>