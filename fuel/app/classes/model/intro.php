<?php

class Model_Intro extends \Orm\Model
{
  // テーブル情報を設定
  protected static $_table_name = 'intro';
  protected static $_properties = array(
    'id',
    'title',
    'body',
  );
  protected static $_primary_key = array('id');

	public static function saves($title,$body,$id)
  {
		for($i=0;$i<count($id);$i++){
			if(Model_Intro::checkId($id[$i])){
				DB::insert(static::$_table_name)
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
