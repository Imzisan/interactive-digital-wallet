function getData(pForm){
	var xhttp=new XMLHttpRequest();
	xhttp.onload=function() {
		var json= JSON.parse(this.responseText);
		buildTable(json);


	}
	xhttp.open("GET",pForn.action+ "?phone="+pForm.username.valuse,true);
	xhttp.send();

} 