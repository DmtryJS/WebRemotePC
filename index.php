<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<button id="button">
		Клик
	</button>
	
	<script>

	 var button = document.getElementById('button');
	 button.addEventListener('click', ajaxf);

	 function getXmlHttpRequest()
{
	if (window.XMLHttpRequest) 
	{
		try 
		{
			return new XMLHttpRequest();
		} 
		catch (e){}
	} 
	else if (window.ActiveXObject) 
	{
		try 
		{
			return new ActiveXObject('Msxml2.XMLHTTP');
		} catch (e){}
		try 
		{
			return new ActiveXObject('Microsoft.XMLHTTP');
		} 
		catch (e){}
	}
	return null;
}

	 function ajaxf() {
	 	console.log('клик клик');
	 	var com = {
	 		 monitorOff: 1,
	 	};
		var xhr = new getXmlHttpRequest();
		xhr.open('GET', 'remote.php?triggerMute=true', true);
		xhr.send();
		xhr.onreadystatechange = function() { 
  			if (xhr.readyState != 4) return;
  			if (xhr.status != 200) {
    			console.log(xhr.status + ': ' + xhr.statusText);
  			} else {
   	 		console.log('отправлено');
  			}
	}

	 }
	</script>
</body>
</html>