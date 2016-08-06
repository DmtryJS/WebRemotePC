<?
	class Control implements ActionControl {
		protected $Path; //путь до программы nirCmd;
		
		function __construct($p = 'C:/nircmd/nircmd.exe') {
			$this->Path = $p;
		}

		function standby() {
			`{$this->Path} standby`;
		}

		function hibernate() {
			`rundll32 powrprof.dll,SetSuspendState 0,1,0`;
		}

		function reboot() {
			`{$this->Path} qboxcom "Вы уверены что хотите перезагрузить компьютер?" "question" exitwin reboot`;
		}

		function turnOff() {
			`{$this->Path} qboxcom "Вы уверены что хотите выключить компьютер?" "question" exitwin poweroff`;
		}

		function logout() {
			`{$this->Path} exitwin logoff`;
		}

		function clickYes() {
			`{$this->Path} dlg "" "" click yes`;
		}

		function clickNo() {
			`{$this->Path} dlg "" "" click no`;
		}

		function monitorOff() {
			`{$this->Path} monitor off`;
		}

		function monitorOn(){
			`{$this->Path} monitor on`;
		}

		function mute() {
			`{$this->Path} mutesysvolume 1`;
		}

		function unmute() {
			`{$this->Path} mutesysvolume 0`;
		}

		function triggerMute() {
			`{$this->Path} mutesysvolume 2`;
		}

		function volUp() {
			`{$this->Path} changesysvolume 2000`;
		}

		function volDown() {
			`{$this->Path} changesysvolume -2000`;
		}
	}
?>