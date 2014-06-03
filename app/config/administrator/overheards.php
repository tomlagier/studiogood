<?php 

/**
 * Jobs Model Config for Administrator
 * For documentation of model config options visit: http://administrator.frozennode.com/docs/model-configuration
 * Also see the Field Types in the documentation to learn how to use them.
 */

return array(

	'title' => 'Overheards',

	'single' => 'Overheard',

	'model' => 'Overheard',

	/**
	 * The display Colunns
	 */

	'columns' => array(
		'id' => array(
			'type' => 'key',
			'title' => 'ID',
		),
		'active' => array(
			'title' => 'Active',
			'type' => 'bool',
		),
		'overheard' => array(
			'title' => 'Overheard',
			'output' => '(:value)',
		),
		'location' => array(
			'title' => 'Location',
			'output' => '(:value)',
		)
	),

	/**
	 * The Editable Columns
	 */
	
	'edit_fields' => array(
		'active' => array(
			'title' => 'Active',
			'type' => 'bool',
		),
		'overheard' => array(
			'title' => 'Overheard',
			'output' => '(:value)',
		),
		'location' => array(
			'title' => 'Location',
			'output' => '(:value)',
		),
	),

	/**
	 * Fields which are required
	 */

	'rules' => array(
		'overheard' => 'required',
		'location' => 'required'
	)
);