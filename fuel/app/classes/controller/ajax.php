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
			Model_Intro::find(Input::post("id",null))->delete();break;
			case "notification":
			Model_Notification::find(Input::post("id",null))->delete();break;
			case "recruit":
			Model_Recruit::find(Input::post("id",null))->delete();break;
			case "menu":
			Model_Menu::find(Input::post("id",null))->delete();break;
			case "wine":
			Model_Wine::find(Input::post("id",null))->delete();break;
			case "seat":
			Model_Seat::find(Input::post("id",null))->delete();break;
		}
		exit;
	}

	/**
	 *
	 * @access  public
	 * @return  No return
	 */
	public function post_update_stock(){
		$id    = Input::post('id',null);
		$stock = Input::post('stock',null);
		$data = array(
			'stock' => $stock,
		);
		DB::update('wines')->set($data)->where('id',$id)->execute();
	}

	/**
	 *
	 * @access  public
	 * @return  JSON
	 */
	public function post_getarea(){

		//JSON形式で出力する
		header('Content-Type: application/json');
		echo json_encode(Model_Counter::countArea(Input::post("dataFilter",null)));
		exit;
	}
}
