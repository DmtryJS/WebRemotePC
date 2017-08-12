# О проекте
Управление компьютером через веб интерфейс на [PHP](http://php.net/), например: сделать звук тише, громче или выключить. Безопастность пока хромает, выпускать в интернет не надо. Может работать на локальном веб сервере из состава OpenServer, но удобнее пользоваться встроенным в php. Запустить можно в папке с проектом, командой:

```sh
php -S адрес_компьютера:8000.
```

После запуска, интерфейс будет доступен на 8000 порту.
Управляет компьютером утилита [nirCmd](http://nircmd.nirsoft.net/).
Подобнее о проекте на [habrahabr](https://habrahabr.ru/users/sad_bro/topics/)

# Реализованы следующие функции
* `standby` - спящий режим
* `hibernate`- гибернация
* `reboot` - перезагрузится
* `turnOff` - выключить
* `logout` - выйти
* `clickYes` - ответ "Да", на системный вопрос
* `clickNo` - ответ "Нет", на системный вопрос
* `monitorOff` - выключить монитор
* `monitorOn` - включить монитор

* `mute` - выключить звук
* `unmute` - включить звук
* `triggerMute` - включить/отключить звук по триггеру
* `volUp` - громкость больше
* `volDown` - громкость меньше 
* `mediaNext` - нажатие медиа кнопки Next
* `mediaPrev` - нажатие медиа кнопки Prev
* `mediaStop` - нажатие медиа кнопки Stop
* `mediaPlayPause` - нажатие медиа кнопки Play/pause

# Установка на OpenServer
* Скачать и установить [Open-server](http://open-server.ru/download/)
* Клонировать репозиторий в папку domains
   * Можно одной командой: зайти в папку `OpenServer/domains` и набрать `git clone https://github.com/DmtryJS/WebRemotePC.git
* Открыть доступ клиентам в локальной сети Open-Server
	* Переименовать папку localhost, в папке domains в любое другое имя.
	* Настройки-> Сервер->IP Адрес сервера->Установить адрес который присвоен сетевому интерфейсу компьютера
	* Настройки->Алиасы->Исходный домен->Вписать ip адрес присвоенный в предыдущем пункте
	* Настройки->Алиасы->Конечный домен->Выбрать папку с распакованным проектом, по умолчанию (WebRemotePC).
* Из папки OpenServer/domains/WebRemotePC распаковать содержимое архива nirCmd в корень диска С, должна получится следующая структура,- C:\nircmd\nircmd.exe (тестировалось на win10 32bit, на сайте автора можно скачать версию под 64x).
* Зайти по адресу http://your_ip/WebRemotePC опробовать в действии.

# Возможные проблемы

* Команды не срабатывают
	* Проверить работает ли nirCmd напрямую, запустить консоль в папке C:\nircmd\ попробовать выполнить команду "nirCmd.exe mutesysvolume 2", - если на прямую работает, переходим к следующему пункту, если нет идем на сайт автора и скачиваем другую версию [nirCmd](http://nircmd.nirsoft.net/)
	* Если на предыдущем шаге все прошло успешно, значит в php запрещено исполнение команд. В настройках php.ini проверяем что бы значение safe_mode было true (Если у Вас php > 5.4.0) то там эта константа удалена. Поэтому гарантированный эффект дает выставление в настройках Open Server последней версии php


# about the project
Computer Management via a web interface [PHP](http://php.net/), for example: to make the sound softer, louder or off. Safety is lame, let the Internet do not have to. It works on the local Web server as part of OpenServer. Manages computer tool [nirCmd](http://nircmd.nirsoft.net/).

# Has the following features
* `Standby` - sleep mode
* `Hibernate`- hibernation
* `Reboot` - reboot
* `TurnOff` - turn off
* `Logout` - exit
* `ClickYes` - the answer is" Yes ", on systemic issues
* `ClickNo` - the answer is" No ", on systemic issues
* `MonitorOff` - turn off monitor
* `MonitorOn` - turn on the monitor

* `Mute` - mute sound
* `Unmute` - unmute sound
* `TriggerMute` - enable / disable the sound of the trigger
* `VolUp` - Volume up
* `VolDown` - the volume is less
* `MediaNext` - press the Next Media button
* `MediaPrev` - Prev button press media 
* `MediaStop` - Stop pressing the Media button
* `MediaPlayPause` - press Play / pause button Media