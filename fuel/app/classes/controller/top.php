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
class Controller_Top extends Controller_Template
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->content = View::forge('top/index');
		$this->template->content->intro = Model_Intro::getAll();
		$this->template->content->notification = Model_Notification::getAll();
		$this->template->content->recruit = Model_Recruit::getAll();
		$this->template->content->seat = Model_Seat::getAll();
		Model_Counter::insertAddress();
	}

	public function action_menu(){
		$this->template->content = View::forge('top/menu');
		$this->template->content->menu = Model_Menu::getAll();
		Model_Counter::insertAddress();
	}

	public function action_wine(){
		$this->template->content = View::forge('top/wine');
		$this->template->content->wine = Model_Wine::getAll();
		Model_Counter::insertAddress();
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_notification()
	{
		$this->template->content = View::forge('top/notification');
		$this->template->content->notification = Model_Notification::getId(Input::get("id",null));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('top/404'), 404);
	}
}
