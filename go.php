<META http-equiv=content-type content="text/html; charset=UTF-8">
<?php
//include("random.php");

$cap = $_COOKIE["captcha"];
function check_code($code, $cap) 
{
	$code = trim($code);
	$code = md5($code);
	if ($code == $cap){return TRUE;}else{return FALSE;}
}

	if (isset($_POST['go'])) 
	{
			if ($_POST['code'] == '')
			{
				exit("Error: empty input"); 
			}
			if (check_code($_POST['code'], $cap))
			{
				echo "Success!";
			}
			else 
			{
				exit("Error: captcha incorrect");
			}
		}
	else 
	{
		exit("Access denied");
	}
	
?>
