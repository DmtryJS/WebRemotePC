<?php

interface ActionControl
{
    /**
     * Включение спящего режима
     * @method standby
     */
    public function standby();

    /**
     * Включение гибернации
     * @method hibernate
     */
    public function hibernate();

    /**
     * Перезагрузить компьютер
     * @method reboot
     * @return [type] [description]
     */
    public function reboot();

    /**
     * Выключить компьютер
     * @method turnOff
     * @return [type] [description]
     */
    public function turnOff();

    /**
     * Завершить сеанс пользователя
     * @method logout
     * @return [type] [description]
     */
    public function logout();

    /**
     * Ответить положительно на запрос
     * @method clickYes
     * @return [type] [description]
     */
    public function clickYes();

    /**
     * Ответитть отрицательно на запрос
     * @method clickNo
     * @return [type] [description]
     */
    public function clickNo();

    /**
     * Выключить монитор
     * @method monitorOff
     * @return [type] [description]
     */
    public function monitorOff();

    /**
     * Включить монитор
     * @method monitorOn
     * @return [type] [description]
     */
    public function monitorOn();

    /**
     * Выключить звук
     * @method mute
     * @return [type] [description]
     */
    public function mute();

    /**
     * Включить звук
     * @method unmute
     * @return [type] [description]
     */
    public function unmute();

    /**
     * Переключить звук
     * @method triggerMute
     * @return [type] [description]
     */
    public function triggerMute();

    /**
     * Увеличить громкость
     * @method volUp
     * @return [type] [description]
     */
    public function volUp();

    /**
     * Уменьшить громкость
     * @method volDown
     * @return [type] [description]
     */
    public function volDown();
}
