<?php

class Model_User extends \Orm\Model
{
  // テーブル情報を設定
  protected static $_table_name = 'user';
  protected static $_properties = array(
    'id',
    'username',
    'password',
    'group',
    'email',
    'lastlogin',
    'login_hash',
    'profile_fields',
    'created_at'
  );
  protected static $_primary_key = array('id');

	/**
	 * @brif    入力チェック
	 * @access  private
	 * @return  
	 */
  public static function loginValidate(){
		$validation = Validation::forge();

		$validation->add('username', 'ユーザー名')
		->add_rule('required')
		->add_rule('min_length', 4)
		->add_rule('max_length', 15);

		$validation->add('password', 'パスワード')
		->add_rule('required')
		->add_rule('min_length', 6)
		->add_rule('max_length', 20);

		$validation->run();
		return $validation;
	}
}
