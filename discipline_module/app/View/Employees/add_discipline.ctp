<h2><?php echo $employee['Employee']['firstn'] . ' ' . $employee['Employee']['lastn']; ?></h2>
<h1>Add Discipline</h1>
<?php
	echo $this->Form->create('Discipline');
	echo $this->Form->input(
		'type', 
		array(
		'options' 	=> array('Verbal Warning', 'Written Warning', 'Suspension'),
		'type' 		=> 'select',
		'empty' 	=> '--Choose Type--',
		'label'		=> 'Select Discipline Type',
		));

	echo $this->Form->input('description');
	echo $this->Form->end('Save Discipline');
?>