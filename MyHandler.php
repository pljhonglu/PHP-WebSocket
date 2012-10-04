<?php 
require_once 'HandlerInterface.php';
require_once 'WebSocket.class.php';
require_once 'WebClient.class.php';

class MyHandler implements HandlerInterface
{
	public function __construct() {}
	
	public function handle($sourceUser, $msg, $server)
	{
		var_dump($msg['msg']);
		foreach ($server->getUsers() as $user) {
			# code...
			$server->send($user->socket,$msg['msg']);
		}
	}
}