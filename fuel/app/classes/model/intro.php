<?php

class Model_Intro extends \Orm\Model
{
	protected static $_table_name = 'intros';
	protected static $_primary_key = array('id');

	protected static $_properties = array(
		'id',
		'title',
		'body',
	);

	public static function getAll(){
		$result = DB::select("*")
		->from("intros")
		->execute()
		->as_array();

		return $result;
	}

	public static function rm($id){
		$result = DB::delete("intros")
					->where("id","=",$id)
					->execute();
	}
}
