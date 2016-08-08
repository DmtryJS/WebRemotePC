var wrapper = document.querySelector(".wrapper");

function getXmlHttpRequest(){
	if (window.XMLHttpRequest) {
		try {
			return new XMLHttpRequest();
		} catch (e){ }
	} else if (window.ActiveXObject) {
		try {
			return new ActiveXObject('Msxml2.XMLHTTP');
		} catch (e){}
		try {
			return new ActiveXObject('Microsoft.XMLHTTP');
		} catch (e){}
		}
	return null;
}

wrapper.addEventListener('click', function(e){
	var target = e.target;
	if(target.tagName!= 'BUTTON') return;
	if (target.getAttribute('data')=='qestion') {
		var yn = confirm(target.innerText + ", уверен?");
		if (!yn) return
			ajaxf(target.id);
	}
	ajaxf(target.id);
})

	function ajaxf($com) {
	 	var command = $com+'=true';
		var xhr = new getXmlHttpRequest();
		xhr.open('GET', 'remote.php?'+command, true);
		xhr.send();
		xhr.onreadystatechange = function() { 
  			if (xhr.readyState != 4) return;
  			if (xhr.status != 200) {
    			console.log(xhr.status + ': ' + xhr.statusText);
  			} else {
   	 		console.log(xhr.responseText);
  			}
		}
	}