<?php

/**
 * Class SampleClass
 *
 * This class is only used to provide a reference point
 * during tests to make sure that things work as expected.
 */
class SampleClass {

	public function hello()
	{
		return 'Hello';
	}

	//--------------------------------------------------------------------

	public function echobox($params)
	{
		return $params;
	}

	//--------------------------------------------------------------------

	public static function staticEcho($params)
	{
		return $params;
	}

	//--------------------------------------------------------------------

	public static function multipleParams($a, $b, $c)
	{
		return $a.$b.$c;
	}

	//--------------------------------------------------------------------

}
