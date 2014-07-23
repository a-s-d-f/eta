<?php

class Model_Notification extends \Orm\Model
{
	protected static $_table_name = 'notifications';

	protected static $_properties = array(
		'id',
		'title',
		'body',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	public static function getAll(){
		$result = DB::select("*")
		->from("notifications")
		->execute()
		->as_array();

		return $result;
	}

	public static function getId($id){
		$result = DB::select("*")
		->from("notifications")
		->where("id","=",$id)
		->execute()
		->as_array();

		return $result;
	}

	public static function rm($id){
		$result = DB::delete("notifications")
		->where("id","=",$id)
		->execute();
	}

	public static function checkId($id){
		$result = DB::select("id")
		->from("notifications")
		->where("id","=",$id)
		->execute()
		->as_array();
		if(empty($result)){
			return true;
		}else{
			return false;
		}
	}

	public static function up($title,$body,$id){
		for($i=0;$i<count($id);$i++){
			if(Model_Notification::checkId($id[$i])){
				DB::insert("notifications")
				->set(array(
					"title" => $title[$i],
					"body" => $body[$i],
					"created_at" => time(),
					"updated_at" => time(),
					))
				->execute();
			}else{
				DB::update("notifications")
				->set(array(
					"title" => $title[$i],
					"body" => $body[$i],
					"updated_at" => time(),
					))
				->where("id","=",$id[$i])
				->execute();
			}
		}
	}

}
