<?php
	interface ActionRoute {
    	/**
         * Проверка приходящих данных
         * @method route
         * @param [type] $arr [description]
         */
    	public function route($arr); 

    	/**
         * Исполнение команды
         * @method execute
         * @param [type] $с [description]
         */
    	public function execute($c); 
}
