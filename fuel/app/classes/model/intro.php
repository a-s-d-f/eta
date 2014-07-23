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

	public static function checkId($id){
		$result = DB::select("id")
		->from("intros")
		->where("id","=",$id)
		->execute()
		->as_array();
		if(empty($result)){
			return true;
		}else{
			return false;
		}
	}

	public static function rm($id){
		$result = DB::delete("intros")
		->where("id","=",$id)
		->execute();
	}

	public static function up($title,$body,$id){
		for($i=0;$i<count($id);$i++){
			if(Model_Intro::checkId($id[$i])){
				DB::insert("intros")
				->set(array(
					"title" => $title[$i],
					"body" => $body[$i],
					))
				->execute();
			}else{
				DB::update("intros")
				->set(array(
					"title" => $title[$i],
					"body" => $body[$i],
					))
				->where("id","=",$id[$i])
				->execute();
			}
		}
	}
}
