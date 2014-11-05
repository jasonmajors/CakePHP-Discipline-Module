<?php
class Discipline extends AppModel {
	public $belongsTo = 'Employee';
	
	public $validate = array(
		'type' => array(
			'rule' => 'notEmpty'
		),
		'description' => array(
			'rule' => 'notEmpty'
		),
	);
}
?>