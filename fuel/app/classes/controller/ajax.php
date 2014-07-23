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
class Controller_Ajax extends Controller_Rest{

	/**
	 *
	 * @access  public
	 * @return  No return
	 */
	public function post_delete(){
		$type = Input::post("type",null);
		switch($type){
			case "intro":
			Model_Intro::rm(Input::post("id",null));break;
			case "notification":
			Model_Notification::rm(Input::post("id",null));break;
			case "recruit":
			Model_Recruit::rm(Input::post("id",null));break;
			case "menu":
			Model_Menu::rm(Input::post("id",null));break;
			case "wine":
			Model_Wine::rm(Input::post("id",null));break;
			case "seat":
			Model_Seat::rm(Input::post("id",null));break;
		}
		exit;
	}
}
