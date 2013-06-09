<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Index extends Controller
{
	protected $sDomain = "a&p";

	public function action_index()
	{
		$oView = View::factory('index/index')
			 ->set('domain',$this->sDomain);
			
		$this->response->body($oView);
	}
}
