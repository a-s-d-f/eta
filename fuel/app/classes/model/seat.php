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

	public static function getId($id){
		$result = DB::select("*")
		->from("seats")
		->where("id","=",$id)
		->execute()
		->as_array();

		return $result;
	}

	public static function rm($id){
		$result = DB::delete("seats")
		->where("id","=",$id)
		->execute();
	}

	public static function up($id,$name,$imgurl){
		DB::update("seats")
		->set(array(
			"name" => $name,
			"imgurl" => $imgurl,
			))
		->where("id","=",$id)
		->execute();
	}

	public static function add($name,$imgurl){
		DB::insert("seats")
		->set(array(
			"name" => $name,
			"imgurl" => $imgurl,
			))
		->execute();
	}
}
