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

	public static function checkId($id){
		$result = DB::select("id")
		->from("recruits")
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
		$result = DB::delete("recruits")
		->where("id","=",$id)
		->execute();
	}

	public static function up($title,$body,$id){
		for($i=0;$i<count($id);$i++){
			if($id == "new" || Model_Recruit::checkId($id[$i])){
				DB::insert("recruits")
				->set(array(
					"title" => $title[$i],
					"body" => $body[$i],
					))
				->execute();
			}else{
				DB::update("recruits")
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
