<?
	define("PATH", "C:/nircmd/nircmd.exe"); //путь до программы управления nircmd.exe

	function __autoload($name) {
		require "class/$name.class.php";
	}

	
	$obj = new Control(PATH);
	$route = new Route($obj);

//если приходит гет, то на съедение методу route
	if ($_GET) {
		$route->route($_GET);
	}

?>