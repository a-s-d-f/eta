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

    	// Configをロード
    	Config::load('dir');

		// リクエストアクションを取得
		$method = Uri::segment(2);

    // ログインチェック
		if (!Auth::check() && $method !== 'login') {
			Response::redirect('admin/login');
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
		
    // 初期表示時
    if (!Security::check_token()) {
      return ;
    }

    // バリデーション
  	$validation = Model_User::loginValidate();
  	$errors = $validation->error();
    if (!empty($errors)) {
      // エラーの設定
  		$result_validate = $validation->show_errors();
      $this->template->content->set_safe('errmsg', $result_validate);
      return ;
    }

    // ログイン処理
  	$auth = Auth::instance();
    $user_data = $validation->validated();
  	if (!$auth->login($user_data['username'], $user_data['password'])) {
      // エラー処理
  	  $result_validate = "ログインに失敗しました。";
      $this->template->content->set_safe('errmsg', $result_validate);
  	  return ;
  	}

    // ログイン成功
  	Response::redirect('admin/index');
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
   * @brif    紹介情報編集
	 * @access  public
	 * @return  Response
	 */
	public function action_editintro()
	{
		$this->template->content = View::forge('admin/editintro');
		$this->template->content->intro = Model_Intro::find('all');

    // 初期表示時
    if (!Security::check_token()) {
      return ;
    }
		Model_Intro::up($_POST["title"],$_POST["body"],$_POST["id"]);break;
	}
	/**
	 *
   * @brif    お知らせ編集
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
   * @brif    お知らせ編集
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
				'path' => Config::get('MENU_IMG_DIR'),
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
				'path' => Config::get('WINE_IMG_DIR'),
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
				'path' => Config::get('SEAT_IMG_DIR'),
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
				'path' => Config::get('MENU_IMG_DIR'),
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
				'path' => Config::get('WINE_IMG_DIR'),
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
				'path' => Config::get('SEAT_IMG_DIR'),
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
