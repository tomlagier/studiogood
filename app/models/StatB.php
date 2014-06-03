<?php

class StatB extends Eloquent {
	protected $table = 'stat_b';

	public static function getStatbAssets($id) {
		$statb_assets = self::find($id);
		return $statb_assets($id);
	}
}