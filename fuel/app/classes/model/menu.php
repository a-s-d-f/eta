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

	public static function getId($id){
		$result = DB::select("*")
		->from("menus")
		->where("id","=",$id)
		->execute()
		->as_array();

		return $result;
	}

	public static function rm($id){
		$result = DB::delete("menus")
		->where("id","=",$id)
		->execute();
	}

	public static function up($id,$name,$type,$comment,$imgurl){
		DB::update("menus")
		->set(array(
			"name" => $name,
			"type" => $type,
			"comment" => $comment,
			"imgurl" => $imgurl,
			))
		->where("id","=",$id)
		->execute();
	}

	public static function add($name,$type,$comment,$imgurl){
		DB::insert("menus")
		->set(array(
			"name" => $name,
			"type" => $type,
			"comment" => $comment,
			"imgurl" => $imgurl,
			))
		->execute();
	}
}
