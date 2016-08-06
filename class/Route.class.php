<?
	class Route implements ActionRoute {
		protected $possible = []; //массив со всеми возможными методами (получается из переданного объекта)		
		protected $ControlObj;
	
		function __construct($obj) {
			$this->possible = get_class_methods($obj); //получаем массив доступных методов
			$this->ControlObj = $obj;
		}

		function route($arr) { //метод проверят есть ли в пришедшем массиве и в доступных методах объекта метод 
			forEach($arr as $key => $value) {	
		   if (in_array($key, $this->possible) && $value == 'true') {
		   	$this->execute($key);
		   } else 
		   	{
		   		Message::sent('wrong method');
		   	}	
			}
		}

		function execute($c) {
			$this->ControlObj->$c();
			Message::sent('executed');
		}

	}
?>