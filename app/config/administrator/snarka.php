<?php
/**
 * Test Model Config for Administrator
 * For documentation of model config options visit: http://administrator.frozennode.com/docs/model-configuration
 * Also see the Field Types in the documentation to learn how to use them.
 */

return array(

	'title' => 'Snarky Titles',

	'single' => 'snark',

	'model' => 'SnarkA',

	/**
	 * The display Columns
	 */
	
	'columns' => array(
		'id',
		'active' => array(
			'title' => 'Active',
			'type' => 'bool',
		),
		'fiction_title_1' => array(
			'title' => 'Fictitious Title One',
			'output' => '(:value)',
		),
		'fiction_title_2' => array(
			'title' => 'Fictitious Title Two',
			'output' => '(:value)',
		),
		'fiction_title_3' => array(
			'title' => 'Fictitious Title Three',
			'output' => '(:value)',
		),
		'pose_2' => array(
			'title' => 'Pose 2',
			'type' => 'image',
			'naming' => 'keep',
			'location' => 'img/profiles/',
			'size_limit' => 5,
		),
		'pose_3' => array(
			'title' => 'Pose 3',
			'type' => 'image',
			'naming' => 'keep',
			'location' => 'img/profiles/',
			'size_limit' => 5,
		),
	),

	'edit_fields' => array(
		'active' => array(
			'title' => 'Active',
			'type' => 'bool',
		),
		'fiction_title_1' => array(
			'title' => 'Fictitious Title One',
			'output' => '(:value)',
		),
		'fiction_title_2' => array(
			'title' => 'Fictitious Title Two',
			'output' => '(:value)',
		),
		'fiction_title_3' => array(
			'title' => 'Fictitious Title Three',
			'output' => '(:value)',
		),
		'pose_2' => array(
			'title' => 'Pose 2',
			'type' => 'image',
			'naming' => 'keep',
			'location' => 'img/profiles/',
			'size_limit' => 5,
		),
		'pose_3' => array(
			'title' => 'Pose 3',
			'type' => 'image',
			'naming' => 'keep',
			'location' => 'img/profiles/',
			'size_limit' => 5,
		),
	),

	'filter' => array(
		'id',
	),

	'rules' => array(
		'fiction_title_1' => 'required',
		'fiction_title_2' => 'required',
		'fiction_title_3' => 'required',
		'pose_2' => 'required',
		'pose_3' => 'required',
	),

);