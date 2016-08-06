<?
interface ActionControl{

	function standby(); //спящий режим
	function hibernate(); //гибернация
	function reboot(); //перезагрузится
	function turnOff(); //выключить
	function logout(); //выйти
	function clickYes(); //ответ "Да", на системный вопрос
	function clickNo(); //ответ "Нет", 
	function monitorOff();//выключить монитор
	function monitorOn(); //включить монитор

	function mute(); //выключить звук
	function unmute(); //включить звук
	function triggerMute(); //включить/отключить звук
	function volUp(); //громкость больше
	function volDown(); //громкость меньше

}

?>