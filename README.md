# О проекте
Управление компьютером через веб интерфейс на [PHP](http://php.net/), например: сделать звук тише, громче или выключить. Безопастность пока хромает, выпускать в интернет не надо. Может работать на локальном веб сервере из состава OpenServer, но удобнее пользоваться встроенным в php. Запустить можно в папке с проектом, командой:

```sh
php -S адрес_компьютера:8000.
```

Управляет компьютером утилита [nirCmd](http://nircmd.nirsoft.net/).


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


# Attention machine translation

#about the project
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