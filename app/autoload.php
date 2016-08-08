<?php

/**
 * Автозагрузка классов
 */
function __autoload($className) {
    require PATH . '/class/' . $className . '.php';
}

return new Application;
