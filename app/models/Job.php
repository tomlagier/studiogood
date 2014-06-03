<?php

class Job extends Eloquent {
	protected $table = 'jobs';

	public function getJobId($id = null)
	{
		if ($id == null){
			return 'no id';
		}
		return $id;
	}
}