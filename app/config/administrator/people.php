<?php 

/**
 * People Model Config for Administrator
 * For documentation of model config options visit: http://administrator.frozennode.com/docs/model-configuration
 * Also see the Field Types in the documentation to learn how to use them.
 */

return array(

	'title' => 'People',

	'single' => 'person',

	'model' => 'Person',

	/**
	 * The display Columns
	 */
	
	'columns' => array(
		'id' => array(
			'title' => 'ID',
			'type' => 'key',
		),
		'active' => array(
			'title' => 'Active',
			'type' => 'bool',
		),
		'name' => array(
			'title' => 'Name',
			'output' => '(:value)',
		),
		'job_title' => array(
			'title' => 'Job Title',
			'output' => '(:value)',
		),
		'silly_title' => array(
			'title' => 'Silly Title',
			'output' => '(:value)',
		),
		'location' => array(
			'title' => 'Location',
			'output' => '(:value)',
		),
		'biography' => array(
			'title' => 'Biography',
			'type' => 'textarea',
			'output' => '(:value)',
		),
		'charity' => array(
			'title' => 'Favorite Charity',
			'output' => '(:value)'
		),
		'clients' => array(
			'title' => 'Awesome Clients',
			'output' => '(:value)'
		),
		'image' => array(
			'title' => 'Profile Pic',
			'output' => '<img src="/img/profiles/(:value)" border="0" alt="" width="100" class="profile-pic" />',
		),
		'image2' => array(
			'title' => 'Pose 2',
			'output' => '<img src="/img/profiles/pose2/(:value)" border="0" alt="" width="100" class="profile-pic" />',
		),
		'image3' => array(
			'title' => 'Pose 3',
			'output' => '<img src="/img/profiles/pose3/(:value)" border="0" alt="" width="100" class="profile-pic" />',
		),
		'thumbnail' => array(
			'title' => 'Thumbnail',
			'output' => '<img src="/img/thumbnails/(:value)" border="0" alt="" width="50" class="thumbnail" />',
		),
	),

	/**
	 * The Editable Columns
	 */
	
	'edit_fields' => array(
		'active' => array(
			'title' => 'Active',
			'type' => 'bool',
		),
		'name' => array(
			'title' => 'Name',
			'output' => '(:value)',
		),
		'job_title' => array(
			'title' => 'Job Title',
			'output' => '(:value)',
		),
		'silly_title' => array(
			'title' => 'Silly Title',
			'output' => '(:value)',
		),
		'location' => array(
			'title' => 'Location',
			'output' => '(:value)',
		),
		'biography' => array(
			'title' => 'Biography',
			'type' => 'textarea',
			'output' => '(:value)',
		),
		'charity' => array(
			'title' => 'Favorite Charity',
			'output' => '(:value)'
		),
		'clients' => array(
			'title' => 'Awesome Clients',
			'output' => '(:value)'
		),
		'image' => array(
			'title' => 'Profile Pic',
			'type' => 'image',
			'naming' => 'keep',
			'location' => public_path() . '/img/profiles/',
			'size_limit' => 5,
		),
		'image2' => array(
			'title' => 'Pose 2',
			'type' => 'image',
			'naming' => 'keep',
			'location' => public_path() . '/img/profiles/pose2/',
			'size_limit' => 5,
		),
		'image3' => array(
			'title' => 'Pose 3',
			'type' => 'image',
			'naming' => 'keep',
			'location' => public_path() . '/img/profiles/pose3/',
			'size_limit' => 5,
		),
		'thumbnail' => array(
			'title' => 'Thumbnail',
			'type' => 'image',
			'naming' => 'keep',
			'location' => public_path() . '/img/thumbnails/',
			'size_limit' => 5,
		),
	),

	/**
	 * Filter Fields
	 */
	
	'filters' => array(
		'id',
		'name' => array(
			'title' => 'Name',
		),
	),

	'rules' => array(
		'name' => 'required',
		'job_title' => 'required',
		'thumbnail' => 'required',
		'biography' => 'required',
		'image' => 'required',
	),
);