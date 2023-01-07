<?php

class TestController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "hello from test::index";
	}
	
	public function checkingAction()
	{
		return 'check.phtml';
	}
}
