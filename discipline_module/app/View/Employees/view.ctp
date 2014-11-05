<h1><?php echo $employee['Employee']['firstn'] . ' ' . $employee['Employee']['lastn']; ?></h1>
<h2>Disciplines</h2>

<?php if(!empty($verbalDiscipline)): ?>
<h4>Verbal Warnings</h4>
<table>
	<tr>
		<th>Description</th>
		<th>Date Issued</th>
	</tr>
		<?php foreach ($verbalDiscipline as $vdiscipline): ?>	
		<tr>
			<td><?php echo $vdiscipline['description']; ?></td>
			<td><?php echo $vdiscipline['added']; ?></td>
		</tr>
		<?php endforeach; ?>
</table>
<?php endif; ?>

<?php if(!empty($writtenDiscipline)): ?>
<h4>Written Warnings</h4>		
<table>
	<tr>
		<th>Description</th>
		<th>Date Issued</th>
	</tr>
		<?php foreach ($writtenDiscipline as $wdiscipline): ?>	
		<tr>
			<td><?php echo $wdiscipline['description']; ?></td>
			<td><?php echo $wdiscipline['added']; ?></td>
		</tr>
		<?php endforeach; ?>
</table>
<?php endif; ?>