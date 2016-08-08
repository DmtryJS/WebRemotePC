<?php

class Route implements ActionRoute
{
    /**
     * массив со всеми возможными методами (получается из переданного объекта)
     * @var []
     */
    protected $possible = [];

    /**
     * [$controlObj какой-то объект
     * @var [type]
     */
    protected $controlObj;

    /**
     * Конструктор
     * @method __construct
     * @param object $obj
     */
    public function __construct($obj)
    {
        // получаем массив доступных методов
        $this->possible = get_class_methods($obj);
        $this->controlObj = $obj;
    }

    /**
     * Метод проверят есть ли в пришедшем массиве и в
     * доступных методах объекта метод
     * @method route
     * @param [type] $routes $_POST массив маршрутов
     * @return
     */
    public function route($routes)
    {
        foreach ($routes as $key => $route) {
            if (in_array($key, $this->possible) && $route == 'true') {
                $this->execute($key);
            } else {
                Message::sent('Wrong method!');
            }
        }
    }

    /**
     * Метод выполняет запуско команды
     * @method execute
     * @param [type] $ccommand [description]
     * @return [type] [description]
     */
    public function execute($ccommand)
    {
        $this->controlObj->$c();
        Message::sent('executed');
    }
}
