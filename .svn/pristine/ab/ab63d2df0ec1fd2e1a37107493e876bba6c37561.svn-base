<?php

class Overheard extends Eloquent {
	protected $table = 'overheards';

	//Extend overheard record with next and previous entries
	public static function getOverheard($id)
	{
		$overheard = self::find($id);
		$overheard->prev = self::where('id', '<', $overheard->id)->max('id');
		$overheard->next = self::where('id', '>', $overheard->id)->min('id');

		//First record, get last record
		if(!isset($overheard->prev))
		{
			$overheard->prev = self::getLastId();
		}

		//Last record, get first record
		if(!isset($overheard->next))
		{
			$overheard->next = self::getFirstId();
		}

		return $overheard;
	}

	public static function getLastId()
	{
		$last = DB::table('overheards')->orderBy('created_at', 'desc')->first();
		return $last->id;
	}

	public static function getFirstId()
	{
		$first = DB::table('overheards')->orderBy('created_at', 'asc')->first();
		return $first->id;
	}

}