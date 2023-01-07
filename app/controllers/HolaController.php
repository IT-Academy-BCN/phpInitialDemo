<?php


class HolaController extends ApplicationController
{
	public function caracolaAction()
	{
		$this->view->message = "hola des de CaraColaController > caracolaAction";
	}
}
