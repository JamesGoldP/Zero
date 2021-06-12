<?php
namespace app\http\controller;

use zero\Controller;

class Index extends Controller
{

	protected $model;
	protected $validate;

	protected function initialize()
	{

	}

	public function index()
	{
		return success();
	}
}