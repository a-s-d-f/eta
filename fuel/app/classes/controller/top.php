<?php
/**
 * @brif      トップページ関連のControllerファイル
 * @author    Sakamoto
 * @date      2014/09/13
 */

/**
 * @brif      トップページ用
 * @package   app
 * @extends   Controller_Template
 */
class Controller_Top extends Controller_Template
{
  /**
  * @brif     前処理
	* @access  public
  * @return
  */
  public function before()
  {
    // 決まり文句
    parent::before();

    // アクセスカウント
    Model_Counter::insertAddress();
  }

  /**
  * @brif     後処理
  * @detail   $response をパラメータとして追加し、after() を Controller_Template 互換にする
	* @access  public
  * @return   Response
  */
  public function after($response)
  {
    // 決まり文句
    $response = parent::after($response);
    return $response;
  }

	/**
	 * @brif    トップページを表示
	 * @access  public
	 * @return
	 */
	public function action_index()
	{
		$this->template->content = View::forge('top/index');

		$this->template->content->intro        = Model_Intro::find('all');
		$this->template->content->notification = Model_Notification::find('all');
		$this->template->content->recruit      = Model_Recruit::find('all');
		$this->template->content->seat         = Model_Seat::find('all');
	}

	/**
	 * @brif    料理ページを表示
	 * @access  public
	 * @return
	 */
	public function action_menu(){
		$this->template->content = View::forge('top/menu');

		$this->template->content->menu = Model_Menu::find('all');
	}

	/**
	 * @brif    ワインページを表示
	 * @access  public
	 * @return
	 */
	public function action_wine(){
		$this->template->content = View::forge('top/wine');

		$this->template->content->wine = Model_Wine::find('all');
	}

	/**
	 * @brif    お知らせページを表示
	 * @access  public
	 * @return
	 */
	public function action_notification()
	{
		$this->template->content = View::forge('top/notification');
		
		$this->template->content->notification = Model_Notification::find(Input::get("id",null));
	}

	/**
	 * @brif    404ページを表示
	 * @access  public
	 * @return
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('top/404'), 404);
	}
}
