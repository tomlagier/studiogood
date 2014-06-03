<?php

class Work extends Eloquent {
	protected $table = 'work_table';

	public static function getWorkAssets($id) {
		$work_assets = self::find($id);
		return $work_assets($id);
	}
}