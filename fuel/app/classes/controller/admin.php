<?php
/**
 * @brif    管理者ページ関連のControllerファイル
 * @author  Sakamoto
 * @date    2014/09/13
 */

/**
 * @brif    管理者ページ用
 * @package app
 * @extends Controller_Template
 */
class Controller_Admin extends Controller_Template
{
  // テンプレートファイルを設定
	public $template = 'template_admin';

  /**
  * @brif   前処理
  * @access public
  * @return
  */
	public function before() {
		// 決まり文句
    parent::before();

		// リクエストアクションを取得
		$method = Uri::segment(2);

    // ログインチェック
		if (!Auth::check()) {
			Response::forge('admin/login');
		}
	}

	/**
	 * @brif    管理者トップを表示
	 * @access  public
	 * @return  Response
	 */
	public function action_index(){
    $this->template->content = View::forge('admin/index');

    // パラメータセット
    $datas = array(
      'intro'        => Model_Intro::find('all'),
      'notification' => Model_Notification::find('all'),
      'recruit'      => Model_Recruit::find('all'),
      'menu'         => Model_Menu::find('all'),
      'wine'         => Model_Wine::find('all'),
      'seat'         => Model_Seat::find('all'),
    );
    $this->template->content->datas = $datas;
	}

	/**
	 * @brif    ログイン処理
	 * @access  public
	 * @return  Response
	 */
	public function action_login(){
		$this->template->title = 'ろぐいん';
		$this->template->content = View::forge('admin/login');
		
    if (Security::check_token()) {
    // エスケープ
  		$username = mysqli_real_escape_string(Input::post('username', null));
  		$password = mysqli_real_escape_string(Input::post('password', null));

      $result_validate = '';
      if ($username !== null && $password !== null) {
  			$validation = Model_User::validateLogin();
  			$errors = $validation->error();
  			if (empty($errors)) {
  			// ログイン認証を行う
  				$auth = Auth::instance();
  				if ($auth->login($username, $password)) {
  				// ログイン成功
  					Response::redirect('admin/index');
  				}
  				$result_validate = "ログインに失敗しました。";
  			} else {
  				$result_validate = $validation->show_errors();
  		  }
		  }
		  $this->template->content->set_safe('errmsg', $result_validate);
    }
	}

	/**
	 * @brif    ログインバリデート
	 * @access  private
	 * @return  
	 */
  private function validate_login(){
		// 入力チェック
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

	/**
	 * @brif    ログアウト処理
	 * @access  public
	 * @return  Response
	 */
	public function action_logout() {
    // ログアウト処理
		Auth::logout();
		Response::redirect('/');
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_editintro()
	{
		$this->template->content = View::forge('admin/editintro');
		$this->template->content->intro = Model_Intro::find('all');
	}
	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_editnotification()
	{
		$this->template->content = View::forge('admin/editnotification');
		$this->template->content->notification = Model_Notification::find('all');
	}

		/**
	 *
	 * @access  public
	 * @return  Response
	 */
		public function action_editrecruit()
		{
			$this->template->content = View::forge('admin/editrecruit');
			$this->template->content->recruit = Model_Recruit::find('all');
		}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_editmenu()
	{
		$this->template->content = View::forge('admin/editmenu');
		$this->template->content->menu = Model_Menu::getId(Input::get("id",null));
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_addmenu()
	{
		$this->template->content = View::forge('admin/addmenu');
		if(isset($_POST["name"])){
			$config = array(
				'path' => DOCROOT.'assets/img/',
				'auto_rename' => true,
				'ext_whitelist' => array( 'jpg', 'jpeg', 'gif', 'png','bmp'),
				);
			Upload::process($config);
			if (Upload::is_valid()) {
				Upload::save();
				if($file = Upload::get_files(0)){
					Model_Menu::add(Input::post("name",null),Input::post("category",null),Input::post("comment",null),$file["saved_as"]);
				}
				return Response::redirect("/admin/");
			}else{
				$this->template->content = View::forge('admin/editwine');
				$this->template->content->set_safe('errmsg', "ファイルアップロードに失敗しました");
			}
		}
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_editwine()
	{
		$this->template->content = View::forge('admin/editwine');
		$this->template->content->wine = Model_Wine::getId(Input::get("id",null));
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_addwine()
	{
		$this->template->content = View::forge('admin/addwine');
		if(isset($_POST["name"])){
			$config = array(
				'path' => DOCROOT.'assets/img/wine/',
				'auto_rename' => true,
				'ext_whitelist' => array( 'jpg', 'jpeg', 'gif', 'png'),
				);
			Upload::process($config);
			if (Upload::is_valid()) {
				Upload::save();
				if($file = Upload::get_files(0)){
					Model_Wine::add(Input::post("name",null),Input::post("category",null),Input::post("money",null),Input::post("comment",null),$file["saved_as"]);
				}
				return Response::redirect("/admin/");
			}else{
				$this->template->content = View::forge('admin/editwine');
				$this->template->content->set_safe('errmsg', "ファイルアップロードに失敗しました");
			}
		}
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_editseat()
	{
		$this->template->content = View::forge('admin/editseat');
		$this->template->content->seat = Model_Seat::getId(Input::get("id",null));
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_addseat()
	{
		$this->template->content = View::forge('admin/addseat');
		if(isset($_POST["name"])){
			$config = array(
				'path' => DOCROOT.'assets/img/',
				'auto_rename' => true,
				'ext_whitelist' => array( 'jpg', 'jpeg', 'gif', 'png'),
				);
			Upload::process($config);
			if (Upload::is_valid()) {
				Upload::save();
				if($file = Upload::get_files(0)){
					Model_Seat::add(Input::post("name",null),$file["saved_as"]);
				}
				return Response::redirect("/admin/");
			}else{
				$this->template->content = View::forge('admin/editwine');
				$this->template->content->set_safe('errmsg', "ファイルアップロードに失敗しました");
			}
		}
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_confirm()
	{
		switch(Input::post("type",null)){
			case "intro":
			Model_Intro::up($_POST["title"],$_POST["body"],$_POST["id"]);break;
			case "notification":
			Model_Notification::up($_POST["title"],$_POST["body"],$_POST["id"]);break;
			case "recruit":
			Model_Recruit::up($_POST["title"],$_POST["body"],$_POST["id"]);break;
			case "menu":
			$config = array(
				'path' => DOCROOT.'assets/img/',
				'auto_rename' => true,
				'ext_whitelist' => array( 'jpg', 'jpeg', 'gif', 'png'),
				);
			Upload::process($config);
			if (Upload::is_valid()) {
				Upload::save();
				if($file = Upload::get_files(0)){
					Model_Menu::up(Input::post("id",null),Input::post("name",null),Input::post("category",null),Input::post("comment",null),$file["saved_as"]);
				}
				return Response::redirect("/admin/");
			}else{
				$this->template->content = View::forge('admin/editwine');
				$this->template->content->set_safe('errmsg', "ファイルアップロードに失敗しました");
			}
			break;
			case "wine":
			$config = array(
				'path' => DOCROOT.'assets/img/wine/',
				'auto_rename' => true,
				'ext_whitelist' => array( 'jpg', 'jpeg', 'gif', 'png'),
				);
			Upload::process($config);
			if (Upload::is_valid()) {
				Upload::save();
				if($file = Upload::get_files(0)){
					Model_Wine::up(Input::post("id",null),Input::post("name",null),Input::post("category",null),Input::post("money",null),Input::post("comment",null),$file["saved_as"]);
				}
				return Response::redirect("admin/");
			}else{
				$this->template->content = View::forge('admin/editwine');
				$this->template->content->set_safe('errmsg', "ファイルアップロードに失敗しました");
			}
			break;
			case "seat":
			$config = array(
				'path' => DOCROOT.'assets/img/',
				'auto_rename' => true,
				'ext_whitelist' => array( 'jpg', 'jpeg', 'gif', 'png'),
				);
			Upload::process($config);
			if (Upload::is_valid()) {
				Upload::save();
				if($file = Upload::get_files(0)){
					Model_Seat::up(Input::post("id",null),Input::post("name",null),$file["saved_as"]);
				}
				return Response::redirect("/admin/");
			}else{
				$this->template->content = View::forge('admin/editwine');
				$this->template->content->set_safe('errmsg', "ファイルアップロードに失敗しました");
			}
			break;
		}
		Response::redirect("admin/");
	}


}
