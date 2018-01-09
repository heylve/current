<?php

class A
{
	public static $var=2;


	function getStaticVar() 
	{
		echo self::$var;
	}
}

$a = new A();
$a ->getStaticVar();
A::$var+=7;
echo "\n".A::$var;
?>
