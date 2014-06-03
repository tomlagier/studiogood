<?php 

/**
 * Jobs Model Config for Administrator
 * For documentation of model config options visit: http://administrator.frozennode.com/docs/model-configuration
 * Also see the Field Types in the documentation to learn how to use them.
 */

return array(

	'title' => 'Jobs',

	'single' => 'Job',

	'model' => 'Job',

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
		'title' => array(
			'title' => 'Position Title',
			'output' => '(:value)',
		),
		'location' => array(
			'title' => 'Location',
			'output' => '(:value)',
		),
		'heading' => array(
			'title' => 'Heading',
			'type' => 'textarea',
			'output' => '(:value)',
		),
		'description' => array(
			'title' => 'Description',
			'type' => 'textarea',
			'output' => '(:value)',
		),
		'icon' => array(
			'title' => 'Icon',
			'type' => 'enum',
			'options' => array('boat', 'booknote', 'booknote-add', 'booknote-remove', 'camera-1', 'camera-2', 'cloud-check', 'cloud-delete', 'cloud-download', 'cloud-upload', 'cloudy', 'cocktail', 'coffee', 'compass', 'compress', 'cutlery', 'delete', 'delete-folder', 'dialogue-add', 'dialogue-delete', 'dialogue-happy', 'dialogue-sad', 'dialogue-text', 'dialogue-think', 'diamond', 'dish-fork', 'dish-spoon', 'download', 'download-folder', 'expand', 'eye', 'fast-food', 'flag', 'folder', 'geolocalizator', 'globe', 'graph', 'graph-descending', 'graph-rising', 'hammer', 'happy-drop', 'headphones', 'heart', 'broken-heart', 'home', 'hourglass', 'image', 'key', 'life-buoy', 'list', 'lock-closed', 'lock-open', 'loudspeaker', 'magnifier', 'magnifier-minus', 'magnifier-plus', 'mail', 'mail-open', 'map', 'medical-case', 'microphone-1', 'microphone-2', 'minus', 'multiple-image', 'music-back', 'music-backtoend', 'music-eject', 'music-forward', 'music-forwardtoend', 'music-pause', 'music-play', 'music-random', 'music-repeat', 'music-stop', 'musical-note', 'musical-note-2', 'old-video-cam', 'paper-pen', 'paper-pencil', 'paper-sheet', 'pen-pencil-ruler', 'pencil', 'pencil-ruler', 'plus', 'portable-pc', 'pricetag', 'printer', 'profile', 'profile-add', 'profile-remove', 'rainy', 'rotate', 'setting-1', 'setting-2', 'share', 'shield-down', 'shield-left', 'shield-right', 'shield-up', 'shopping-cart', 'shopping-cart-content', 'sinth', 'smartphone', 'spread', 'squares', 'stormy', 'sunny', 'tablet', 'three-stripes-horiz', 'three-stripes-vert', 'ticket', 'todolist', 'todolist-add', 'todolist-check', 'trash-bin', 'tshirt', 'tv-monitor', 'umbrella', 'upload', 'upload-folder', 'variable', 'video-cam', 'volume-higher', 'volume-lower', 'volume-off', 'watch', 'waterfall', 'website-1', 'website-2', 'wine', 'calendar', 'alarm-clock', 'add-folder', 'accelerator', 'agenda', 'arrow-left', 'arrow-down', 'battery-1', 'case', 'arrow-up', 'arrow-right', 'case-2', 'cd', 'battery-2', 'battery-3', 'check', 'battery-4', 'chronometer', 'clock', 'blackboard-graph'),
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
		'title' => array(
			'title' => 'Position Title',
			'output' => '(:value)',
		),
		'location' => array(
			'title' => 'Location',
			'output' => '(:value)',
		),
		'heading' => array(
			'title' => 'Heading',
			'type' => 'textarea',
			'output' => '(:value)',
		),
		'description' => array(
			'title' => 'Description',
			'type' => 'textarea',
			'output' => '(:value)',
		),
		'icon' => array(
			'title' => 'Icon',
			'type' => 'enum',
			'options' => array('boat', 'booknote', 'booknote-add', 'booknote-remove', 'camera-1', 'camera-2', 'cloud-check', 'cloud-delete', 'cloud-download', 'cloud-upload', 'cloudy', 'cocktail', 'coffee', 'compass', 'compress', 'cutlery', 'delete', 'delete-folder', 'dialogue-add', 'dialogue-delete', 'dialogue-happy', 'dialogue-sad', 'dialogue-text', 'dialogue-think', 'diamond', 'dish-fork', 'dish-spoon', 'download', 'download-folder', 'expand', 'eye', 'fast-food', 'flag', 'folder', 'geolocalizator', 'globe', 'graph', 'graph-descending', 'graph-rising', 'hammer', 'happy-drop', 'headphones', 'heart', 'broken-heart', 'home', 'hourglass', 'image', 'key', 'life-buoy', 'list', 'lock-closed', 'lock-open', 'loudspeaker', 'magnifier', 'magnifier-minus', 'magnifier-plus', 'mail', 'mail-open', 'map', 'medical-case', 'microphone-1', 'microphone-2', 'minus', 'multiple-image', 'music-back', 'music-backtoend', 'music-eject', 'music-forward', 'music-forwardtoend', 'music-pause', 'music-play', 'music-random', 'music-repeat', 'music-stop', 'musical-note', 'musical-note-2', 'old-video-cam', 'paper-pen', 'paper-pencil', 'paper-sheet', 'pen-pencil-ruler', 'pencil', 'pencil-ruler', 'plus', 'portable-pc', 'pricetag', 'printer', 'profile', 'profile-add', 'profile-remove', 'rainy', 'rotate', 'setting-1', 'setting-2', 'share', 'shield-down', 'shield-left', 'shield-right', 'shield-up', 'shopping-cart', 'shopping-cart-content', 'sinth', 'smartphone', 'spread', 'squares', 'stormy', 'sunny', 'tablet', 'three-stripes-horiz', 'three-stripes-vert', 'ticket', 'todolist', 'todolist-add', 'todolist-check', 'trash-bin', 'tshirt', 'tv-monitor', 'umbrella', 'upload', 'upload-folder', 'variable', 'video-cam', 'volume-higher', 'volume-lower', 'volume-off', 'watch', 'waterfall', 'website-1', 'website-2', 'wine', 'calendar', 'alarm-clock', 'add-folder', 'accelerator', 'agenda', 'arrow-left', 'arrow-down', 'battery-1', 'case', 'arrow-up', 'arrow-right', 'case-2', 'cd', 'battery-2', 'battery-3', 'check', 'battery-4', 'chronometer', 'clock', 'blackboard-graph'),
		),
	),

	/**
	 * Fields by which you can filter
	 */

	'filters' => array(
		'id',
		'title' => array(
			'title' => 'Position Title',
		),
		'location' => array(
			'title' => 'Location',
		),
		'active' => array(
			'title' => 'Active',
		)
	),

	/**
	 * Fields which are required
	 */

	'rules' => array(
		'title' => 'required',
		'location' => 'required',
		'heading' => 'required',
		'description' => 'required',
		'icon' => 'required'
	)
);