<?php 

namespace App;
use \App\Model\User;
use \App\Model\Order;

class PageAdmin extends Page {

	public function __construct($opts = array(), $tpl_dir = "/views/admin/")
	{
		$user = User::getFromSession();

		$orderCount = Order::getNewOrdersCount();

		$opts["data"] = array_merge([
			"user" => $user->getValues(),
			"orderCount" => $orderCount
		], $opts["data"] ?? []);

		parent::__construct($opts, $tpl_dir);
	}
}

 ?>