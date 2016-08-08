<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ControlPC</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="other">
            <button id="monitorOff">
                Выключить монитор
            </button>

            <button id="triggerMute">
                Включить/отключить звук
            </button>

            <button id="volUp">
                Громкость+
            </button>

            <button id="volDown">
                Громкость-
            </button>
        </div>
        <div class="start">
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
    <script src="assets/js/script.js"></script>
</body>
</html>
