<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ControlPC</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<div class="wrapper"> 
		<div class="media">
			
			<button id="triggerMute">
				Включить/отключить звук 
			</button>
			
			<button id="volUp">
				Громкость+ 
			</button>

			<button id="volDown">
				Громкость- 
			</button>

			<button id="mediaNext">
				mediaNext 
			</button>
			<button id="mediaPrev">
				mediaPrev 
			</button>
			<button id="mediaStop">
				mediaStop 
			</button>
			<button id="mediaPlayPause">
				mediaPlayPause 
			</button>
		</div>
		<div class="start">
			<button id="monitorOff" data='qestion'>
				Выключить монитор
			</button>

			<button id="standby" data='qestion'>
				Спящий режим
			</button>

			<button id="hibernate" data='qestion'>
				Гибернация
			</button>

			<button id="reboot" data='qestion'>
				Перезагрузить
			</button>

			<button id="turnOff" data='qestion'>
				Выключить
			</button>

			<button id="logout" data='qestion'>
				Выйти
			</button>
		</div>	
	</div>
	<script src="js/script.js"></script>	
</body>
</html>