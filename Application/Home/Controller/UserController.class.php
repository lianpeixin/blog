<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {
	/**
	 * 注册用户
	 */
	public function register() {
		$u = M('User');
		$u->username = $_GET['username'];
		$u->password = $_GET['password'];
		$u->add();
	}
}