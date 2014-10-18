<?php

class Model_Wine extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'type',
		'money',
		'siteurl',
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

	public static function getId($id){
		$result = DB::select("*")
		->from("wines")
		->where("id","=",$id)
		->execute()
		->as_array();

		return $result;
	}
	public static function rm($id){
		$result = DB::delete("wines")
		->where("id","=",$id)
		->execute();
	}

	public static function up($id,$name,$type,$money,$comment,$imgurl){
		DB::update("wines")
		->set(array(
			"name" => $name,
			"type" => $type,
			"money" => $money,
			"comment" => $comment,
			"imgurl" => $imgurl,
			))
		->where("id","=",$id)
		->execute();
	}

	public static function add($name,$type,$money,$comment,$imgurl){
		DB::insert("wines")
		->set(array(
			"name" => $name,
			"type" => $type,
			"money" => $money,
			"comment" => $comment,
			"imgurl" => $imgurl,
			))
		->execute();
	}

}
