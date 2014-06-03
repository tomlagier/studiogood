<?php

class SnarkA extends Eloquent {
	protected $table = 'snark_a';

	public static function getSnarkaAssets($id) {
		$snarka_assets = self::find($id);
		return $snarka_assets($id);
	}
}