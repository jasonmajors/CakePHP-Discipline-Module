<h1>Add Employee</h1>
<?php
	echo $this->Form->create('Employee');
	echo $this->Form->input('firstn', array('label' => 'First Name'));
	echo $this->Form->input('lastn', array('label' => 'Last Name'));
	echo $this->Form->input('department', array('label' => 'Department'));
	echo $this->Form->end('Save Employee');
?>