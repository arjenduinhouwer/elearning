
function changeForm() {

hr = new XMLHttpRequest();

url = "parse.php";

	var answer = $("#answer:checked").val();	


var vars = "answer="+answer;

hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

hr.onreadystatechange = function() {
	if(hr.readyState == 4 && hr.status == 200) {
		var returnData = hr.responseText;
		document.getElementById('status').innerHTML = returnData;
	}

}

	hr.send(vars);
	document.getElementById('status').innerHTML = "<img src='ajax-loader.gif' />";

}