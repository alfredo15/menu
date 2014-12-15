// JavaScript Document

if (window.XMLHttpRequest)
{
	// Objeto para IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}else{
	// Objeto para IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

// Abrimos el archivo que esta alojado en el servidor cd_catalog.xml
xmlhttp.open("GET","xml/men.xml",false);
xmlhttp.send();

// Obtenemos un objeto XMLDocument con el contenido del archivo xml del servidor
xmlDoc=xmlhttp.responseXML;

// Obtenemos todos los nodos denominados producto del archivo xml
var foros=xmlDoc.getElementsByTagName("producto");

// Hacemos un bucle por todos los elementos foro
for(var i=0; i < foros.length;i++)
{
	// Del elemento foro, obtenemos del primer elemento denominado "titulo"
	// el valor del primer elemento interno
	titulo=foros[i].getElementsByTagName("configuracion")[i].childNodes[i].nodeValue
	
	url=foros[i].getElementsByTagName("programa")[i].childNodes[i].nodeValue
	
	document.write("<div>");
		document.write("<span>");
		document.write(titulo);
		document.write("</span><span>");
		document.write("<a href='"+url+"' target='_blank'>"+url+"</a>");
		document.write("</span>");
	document.write("</div>");
}