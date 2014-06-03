<?php

class Person extends Eloquent {
	protected $table = 'peoples';

	public function socials() {
		return $this->hasMany('Social');
	}

	public function whimseys() {
		return $this->hasMany('Whimsey');
	}

	public static function getPerson($id) {
		$person = self::with('whimseys', 'socials')->find($id);
		return $person;
	}
}