function loadxml(name){


     //document.write(v);
	 if(window.XMLHttpRequest){
	 xmlhttp= new XMLHttpRequest();
	 }
	 else{
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.open("GET",name,false);
	xmlhttp.send();
	return xmlhttp.responseXML;
	

}
