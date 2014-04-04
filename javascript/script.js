// JavaScript Document
function test()
{
		alert('testn\'est pas un nombre');
		return false;
}

function isANumber(number)
{

	if(isNaN(number) == true)
	{
		alert('Necesita un numero!');
		return false;
	}
	else
	{
		return true;
	}
}
