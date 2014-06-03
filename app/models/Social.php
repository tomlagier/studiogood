<?php

class Social extends Eloquent {
	protected $table = 'social_table';

	public function person() {
		return $this->belongsTo('Person', 'person_id');
	}
}