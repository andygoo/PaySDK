<?php
namespace Yurun\PaySDK\AlipayCrossBorder\Online\Notify;

use Yurun\PaySDK\NotifyBase;
use \Yurun\PaySDK\AlipayCrossBorder\Reply\Base as ReplyBase;
use \Yurun\PaySDK\Lib\XML;
use \Yurun\PaySDK\Lib\ObjectToArray;

abstract class Base extends NotifyBase
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 返回数据
	 * @param boolean $success
	 * @param string $message
	 * @return void
	 */
	public function reply($success, $message = '')
	{
		if($success)
		{
			echo 'success';
		}
	}

	/**
	 * 获取通知数据
	 * @return void
	 */
	public function getNotifyData()
	{
		return $_POST;
	}
	
	/**
	 * 对通知进行验证，是否是正确的通知
	 * @return bool
	 */
	public function notifyVerify()
	{
		return $this->sdk->verifyCallback($this->data);
	}
}