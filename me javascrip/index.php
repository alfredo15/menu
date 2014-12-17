<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

	<script>
	
	function loadXMLDoc(filename)
	{
		if (window.XMLHttpRequest)
		{
			xhttp=new XMLHttpRequest();
		}
		else // code for IE5 and IE6
		{
			xhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhttp.open("GET",filename,false);
		xhttp.send();
		return xhttp.responseXML;
	}
	
	var xmlDoc = loadXMLDoc("men.xml");
	
	var producto = xmlDoc.getElementsByTagName("producto");
	

	
	
	document.write("<ul>");
	for ( a = 0 ; a < producto.length ; a++)
	{	
		var atriProd = xmlDoc.getElementsByTagName("producto")[a].attributes;
		
		aProd = atriProd.getNamedItem("nombre");
		
		document.write("<li>");
		document.write(aProd.value);
		//alert('NmPro: '+ aProd.value);
		
			var control = xmlDoc.getElementsByTagName("configuracion");

			for ( b = 0; b < control.length ; b++)
			{
				var atriConf = xmlDoc.getElementsByTagName("configuracion")[b].attributes;
				
				aConf = atriConf.getNamedItem("nombre");
				
				//alert('NmPro: '+ aProd.value +'\nNomConf: '+ aConf.value);
				
				document.write("<li>");
				document.write(aConf.value);
				document.write("</li>");
				
				var programa = xmlDoc.getElementsByTagName("programa");
				
				for(c = 0; c < programa.length ; c++)
				{
					var atriProg = xmlDoc.getElementsByTagName("programa")[c].childNodes[0].nodeValue;
					//alert('NmProd: '+ aProd.value +'\nNomConf: '+ aConf.value + '\nNomProg: '+ atriProg);

					document.write("<li>");
					document.write(atriProg);
					document.write("</li>");
					
				}
				
			}
			
		document.write("</li>");
		
	}
	document.write("</ul>");
	
	</script>

<body>

</body>
</html>