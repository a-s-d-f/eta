<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin extends Controller_Template
{
	public function before() {
		parent::before();
        // 初期処理
		$method = Uri::segment(2);

		// ログイン済みチェック
		$nologin_methods = array(
			'login',
			);
		if (in_array($method, $nologin_methods) && Auth::check()) {
			Response::redirect('admin/index');
		}
	}
	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index(){
		$this->template->content = View::forge('admin/index');
		$this->template->content->intro = Model_Intro::getAll();
		$this->template->content->notification = Model_Notification::getAll();
		$this->template->content->recruit = Model_Recruit::getAll();
		$this->template->content->menu = Model_Menu::getAll();
		$this->template->content->wine = Model_Wine::getAll();
		$this->template->content->seat = Model_Seat::getAll();
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_login(){
		// ログイン処理
		$username = Input::post('username', null);
		$password = Input::post('password', null);
		$result_validate = '';
		if ($username !== null && $password !== null) {
			$validation = $this->validate_login();
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
		$this->template->title = 'ろぐいん';
		$this->template->content = View::forge('admin/login');
		$this->template->content->set_safe('errmsg', $result_validate);
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_editintro()
	{
		$this->template->content = View::forge('admin/editintro');
		$this->template->content->intro = Model_Intro::getAll();
	}
	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_editnotification()
	{
		$this->template->content = View::forge('admin/editnotification');
		$this->template->content->notification = Model_Notification::getAll();
	}

		/**
	 *
	 * @access  public
	 * @return  Response
	 */
		public function action_editrecruit()
		{
			$this->template->content = View::forge('admin/editrecruit');
			$this->template->content->recruit = Model_Recruit::getAll();
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
				'ext_whitelist' => array( 'jpg', 'jpeg', 'gif', 'png'),
				);
			Upload::process($config);
			if (Upload::is_valid()) {
				Upload::save();
				if($file = Upload::get_files(0)){
					Model_Menu::add(Input::post("name",null),Input::post("category",null),Input::post("comment",null),$file["name"]);
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
					Model_Wine::add(Input::post("name",null),Input::post("category",null),Input::post("money",null),Input::post("comment",null),$file["name"]);
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
					Model_Seat::add(Input::post("name",null),$file["name"]);
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
					Model_Menu::up(Input::post("id",null),Input::post("name",null),Input::post("category",null),Input::post("comment",null),$file["name"]);
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
					Model_Wine::up(Input::post("id",null),Input::post("name",null),Input::post("category",null),Input::post("money",null),Input::post("comment",null),$file["name"]);
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
					Model_Seat::up(Input::post("id",null),Input::post("name",null),$file["name"]);
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
