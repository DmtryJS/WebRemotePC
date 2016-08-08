<?
    $applicationPath = 'C:/nircmd/nircmd.exe'; // <-путь до программы управления nircmd.exe
    define("PATH", $applicationPath);

    function __autoload($name) {
        require "class/$name.class.php";
    }
    
    $obj = new Control(PATH);
    $route = new Route($obj);

    // если приходит гет, то на съедение методу route
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    if ($requestMethod == 'GET' 
        && !empty($requestMethod)
    ) {
        $route->route($_GET);
    }
 
