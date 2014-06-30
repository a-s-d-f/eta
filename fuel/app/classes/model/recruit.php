<?php

class Model_Recruit extends \Orm\Model
{
	protected static $_table_name = 'recruits';

	protected static $_properties = array(
		'id',
		'title',
		'body',
	);

	public static function getAll(){
		$result = DB::select("*")
		->from("recruits")
		->execute()
		->as_array();

		return $result;
	}
}
