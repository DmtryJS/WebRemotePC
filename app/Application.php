<?php

/**
 * Класс запуска приложения
 */
class Application
{
    /**
     * Путь к запускаемому файлу программы управления
     * @var [type]
     */
    protected $appPath = null;


    /**
     * Запуск приложения
     */
    public function start()
    {
        if ($this->isPost() && $this->isAjax()) {

            // запускаемому команду чистим (ну хотябы так)
            $executeCommand = filter_var($_POST, FILTER_SANITIZE_STRING);

            // создаем класс контрола
            $controller = new Control($this->getExecutableAppPath());

            $route = new Route($executeCommand);

            $route->route();
        }
    }


    /**
     * Запрос является POST?
     * @return boolean вернет true если запрос это POST
     */
    protected function isPost()
    {
        if ($_SERVER["REQUEST_METHOD"] == 'POST'){
            return true;
        }

        return false;
    }



    /**
     * Определить, является ли этот запрос AJAX
     * @return boolean вернет true если запрос ajax
     */
    protected function isAjax()
    {
        if (isset ($_SERVER['HTTP_X_REQUESTED_WITH'])
            && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ){
            return true;
        }

        return false;
    }


    /**
     * Метод устанавливает имя файла приложения управления
     * компьютером
     * @return string имя файла
     */
    public function setExecutableAppPath($path)
    {
        if ($path) {
            $this->appPath = $path;
        }

        return $this;
    }

    /**
     * Метод возвращает имя файла приложения управления
     * компьютером
     * @return string имя файла
     */
    public function getExecutableAppPath()
    {
        if ($this->appPath) {
            return $this->appPath;
        }

        throw new Exception("Incorrect application path!", 500);
    }
}
