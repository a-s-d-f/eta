<?php

class Model_Seat extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'imgurl',
	);

	protected static $_table_name = 'seats';

	public static function getAll(){
		$result = DB::select("*")
		->from("seats")
		->execute()
		->as_array();

		return $result;
	}
}
