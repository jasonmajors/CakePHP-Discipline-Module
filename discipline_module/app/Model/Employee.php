<?php 
class Employee extends AppModel {
	public $hasMany = 'Discipline';
	
	public $validate = array(
		'firstn' => array(
			'rule' => 'notEmpty'
		),
		'lastn' => array(
			'rule' => 'notEmpty'
		),
		'department' => array(
			'rule' => 'notEmpty'
		)
	);
}
?>