<?php

class Model_Menu extends \Orm\Model
{
	protected static $_table_name = 'menus';

	protected static $_properties = array(
		'id',
		'name',
		'type',
		'comment',
		'imgurl'
	);

	public static function getAll(){
		$result = DB::select("*")
		->from("menus")
		->execute()
		->as_array();

		return $result;
	}

}
