<?php
    class Control implements ActionControl
    {
        protected $applicationPath;

        /**
         * Конструктор
         * @method __construct
         * @param [type] $path [description]
         */
        public function __construct($path = 'C:/nircmd/nircmd.exe') {
            $this->applicationPath = $path;
        }

        /**
         * Метод выключает спящий режим 
         * @method standby
         * @return [type] [description]
         */
        public function standby()
        {
            `{$this->applicationPath} standby`;
        }

        /**
         * Метод включает гибернацию
         * @method hibernate
         * @return [type] [description]
         */
        public function hibernate()
        {
            `rundll32 powrprof.dll,SetSuspendState 0,1,0`;
        }

        /**
         * Метод перезагружает компьютер
         * @method reboot
         * @return [type] [description]
         */
        public function reboot()
        {
            `{$this->applicationPath} exitwin reboot`;
        }

        /**
         * Метод выключает компьютер
         * @method turnOff
         * @return [type] [description]
         */
        public function turnOff()
        {
            `{$this->applicationPath} exitwin poweroff`;
        }

        /**
         * Метод завершает сеанс пользователя
         * @method logout
         * @return [type] [description]
         */
        public function logout()
        {
            `{$this->applicationPath} exitwin logoff`;
        }

        /**
         * Метод выбриает в диалоге ДА
         * @method clickYes
         * @return [type] [description]
         */
        public function clickYes()
        {
            `{$this->applicationPath} dlg "" "" click yes`;
        }

        /**
         * Метод выбриает в диалоге НЕТ 
         * @method clickNo
         * @return [type] [description]
         */
        public function clickNo()
        {
            `{$this->applicationPath} dlg "" "" click no`;
        }

        /**
         * Метод выключчает монитор
         * @method monitorOff
         * @return [type] [description]
         */
        public function monitorOff()
        {
            `{$this->applicationPath} monitor off`;
        }

        /**
         * Метод включает монитор
         * @method monitorOn
         * @return [type] [description]
         */
        public function monitorOn()
        {
            `{$this->applicationPath} monitor on`;
        }

        /**
         * Метод выключает звук на компьютере
         * @method mute
         * @return [type] [description]
         */
        public function mute()
        {
            `{$this->applicationPath} mutesysvolume 1`;
        }

        /**
         * Метод включает звук на компьютере
         * @method unmute
         * @return [type] [description]
         */
        public function unmute()
        {
            `{$this->applicationPath} mutesysvolume 0`;
        }

        /**
         * Метод переключает режим звука на включить/выключить
         * @method triggerMute
         * @return [type] [description]
         */
        public function triggerMute()
        {   
            `{$this->applicationPath} mutesysvolume 2`;
        }

		  /**
         * Метод увеличивает громкость системы на 3000 ед.
         * @method volUp
         * @return [type] [description]
         */
        public function volUp()
        {
            `{$this->applicationPath} changesysvolume 3000`;
        }

        /**
         * Метод уменьшает громкость системы на 3000 ед.
         * @method volDown
         * @return [type] [description]
         */
        public function volDown()
        {
            `{$this->applicationPath} changesysvolume -3000`;
        }

        /**
         * Метод воспроизводит нажатие медиа кнопки Next.
         * @method mediaNext
         * @return [type] [description]
         */
		  public function mediaNext() 
		  {
			`{$this->applicationPath} sendkey 0xB0 press`;
		  }

		  /**
         * Метод воспроизводит нажатие медиа кнопки Prev.
         * @method mediaPrev
         * @return [type] [description]
         */
		  public function mediaPrev() 
		  {
			`{$this->applicationPath} sendkey 0xB1 press`;
		  }

		  /**
         * Метод воспроизводит нажатие медиа кнопки Stop.
         * @method mediaStop
         * @return [type] [description]
         */
		  public function mediaStop() 
		  {
			`{$this->applicationPath} sendkey 0xB2 press`;
		  }

		  /**
         * Метод воспроизводит нажатие медиа кнопки Play/Pause.
         * @method mediaPlayPause
         * @return [type] [description]
         */
		  public function mediaPlayPause()
		  {
			`{$this->applicationPath} sendkey 0xB3 press`;
		  }
	}


        
  

