<h1><?php echo $employee['Employee']['firstn'] . ' ' . $employee['Employee']['lastn']; ?></h1>
<h2>Disciplines</h2>
<table>
	<tr>
		<th>Description</th>
		<th>Date Issued</th>
	</tr>
	<tr>
		<?php $disciplines = $employee['Discipline']; ?>
		<?php foreach ($disciplines as $discipline): ?>
			<td><?php echo $discipline['description']; ?></td>
			<td><?php echo $discipline['added']; ?></td>
	</tr>
		<?php endforeach; ?>
</table>		
		