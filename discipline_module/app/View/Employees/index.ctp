<h1>EMPLOYEES</h1>
<table>
	<tr>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Added</th>
		<th>View Employee</th>
		<th>Discipline</th>
	</tr>

	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo $employee['Employee']['lastn']; ?></td>
		<td><?php echo $employee['Employee']['firstn']; ?></td>
		<td><?php echo $employee['Employee']['added']; ?></td>
		<td>
			<?php echo $this->Html->link('View Employee', 
			array(	'controller' => 'employees',
					'action' => 'view',
					$employee['Employee']['id'],
				)
			); ?>
		</td>
		<td>
			<?php echo $this->Html->link('Add Discipline',
			array( 	'controller' => 'employees',
					'action' => 'add_discipline',
					$employee['Employee']['id'],
				)	
			); ?>
		</td>			
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Add Employee',
	array(	'controller' => 'employees',
			'action' => 'add_employee',
		)
	); ?>