<?php 

/**
 * Model Config for Administrator
 * For documentation of model config options visit: http://administrator.frozennode.com/docs/model-configuration
 * Also see the Field Types in the documentation to learn how to use them.
 */

return array(

	'title' => 'Social Media',

	'single' => 'social media',

	'model' => 'Social',

	/**
	 * The display Columns
	 */
	
	'columns' => array(
		'id' => array(
			'type' => 'key',
			'title' => 'ID',
		),
		'person' => array(
		    'title' => "Person", //column heading
		    'relationship' => 'person', //this is the name of the Eloquent relationship method (from the selected model)
		    'select' => "(:table).name", //(:table) gets pulled in from the model, just need the field name (in this case name)
		),
		'type' => array(
			'title' => 'Social Network',
			'type' => 'enum',
			'output' => '(:value)'
		),
		'profile_link' => array(
			'title' => 'Profile Link',
			'output' => '(:value)'
		)
	),

	'edit_fields' => array(
		'person' => array( //IMPORTANT - needs to be titled the name of the relationship function on the model
			'type' => 'relationship',
			'title' => 'Person', //Column heading
			'name_field' => 'name', //The field from the related model to pull. In this case, name
		),
		'type' => array(
			'title' => 'Social Network',
			'type' => 'enum',
			'options' => array('Facebook', 'Twitter', 'LinkedIn', 'Yelp', 'FourSquare', 'Instagram', 'Pinterest', 'Digg', 'Reddit', 'GooglePlus', 'YouTube', 'Flickr', 'Tumblr', 'Bloggr', 'StumbledUpon')
		),		
		'profile_link' => array(
			'title' => 'Profile Link',
			'output' => '(:value)',
		),
	),
);