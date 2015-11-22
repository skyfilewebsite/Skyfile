<?php
//////////////////////////////////////////////////////////////////////////////////////
//all text which is printed via PHP or HTML should go in this file as a constant.

$SITENAME = 'Project Fileshare';
$WELCOME_MESSAGE = 'Welcome to {0}!';

/////////////////////////////////////////////////////////////////////////////////////


//this function is used to print out our properties
function printText($property, $subparams = '')
{
	if($subparams == '')
	{
		echo $property;
	}
	else
	{
		for($i = 0; $i < count($subparams); $i++)
		{
			$property = str_replace('{' . $i . '}', $subparams[$i], $property);
		}
		echo $property;
	}
}
?>