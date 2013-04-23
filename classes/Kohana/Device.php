<?php defined('SYSPATH') or die('No direct access allowed.');

abstract class Kohana_Device 
{
	protected $_detector;

	public function __construct()
	{
		include_once Kohana::find_file('vendor/mobile-detect', 'Mobile_Detect');

		$this->_detector = new Mobile_Detect();
	}

	public function is_mobile($userAgent = NULL, $httpHeaders = NULL)
	{
		return $this->_detector->isMobile($userAgent, $httpHeaders);
	}

	public function is_tablet($userAgent = null, $httpHeaders = null)
	{
		return $this->_detector->isTablet();
	}

	public function is($key, $userAgent = null, $httpHeaders = null)
	{
		return $this->_detector->is($key, $userAgent, $httpHeaders);
	}

	public function __call($name, $arguments)
	{
		call_user_func_array(array($this->_detector, $name), $arguments);
	}

}
