<?php

class Model_Wine extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'type',
		'money',
		'comment',
		'imgurl',
	);

	protected static $_table_name = 'wines';

	public static function getAll(){
		$result = DB::select("*")
		->from("wines")
		->execute()
		->as_array();

		return $result;
	}

}
