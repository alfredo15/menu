<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

$xml = new DomDocument('1.0', 'UTF-8');

		$configuracion = $xml->createElement('configuracion');
		$configuracion = $xml->appendChild($configuracion);
		
		$wsdl = $xml->createElement('WSDL');
	    $wsdl = $configuracion->appendChild($wsdl);
		
		$suUsu = $xml->createElement('superUsuario','http://192.168.1.2:8080/KS_SuperUsuario/services/KS_SuperUsuario?wsdl');
    	$suUsu = $wsdl->appendChild($suUsu);

	    $privilegios = $xml->createElement('privilegios','http://192.168.1.2:8080/KS_Privilegios/services/KS_Privilegios?wsdl');
	    $privilegios = $wsdl->appendChild($privilegios);

	    $properties = $xml->createElement('properties','http://192.168.1.2:8080/KS_Properties/services/KS_Properties?wsdl');
	    $properties = $wsdl->appendChild($properties);

	    $procesos = $xml->createElement('procesos','http://192.168.1.2:8080/KS_WSProceso/services/KS_WSProcesos?wsdl');
	    $procesos = $wsdl->appendChild($procesos);
		
		$control = $xml->createElement('control','http://192.168.1.2:8080/KS_Control/services/KS_Control?wsdl');
		$control = $wsdl->appendChild($control);
		
		$seguridad = $xml->createElement('seguridad','http://10.0.8.14:8080/KS_Seguridad/services/KS_Seguridad?wsdl');
		$seguridad = $wsdl->appendChild($seguridad);
		
		$autoriza = $xml->createElement('autoriza','http://10.0.8.14:8080/KS_Autorizacion/services/KS_Autorizacion?wsdl');
		$autoriza = $wsdl->appendChild($autoriza);
		
		$nom_emp = $xml->createElement('nom_emp','KS Soluciones');
		$nom_emp = $wsdl->appendChild($nom_emp);
		
		$color1_rgb = $xml->createElement('color1_rgb','111,111,111');
		$color1_rgb = $wsdl->appendChild($color1_rgb);
		
		$color2_rgb = $xml->createElement('color2_rgb','111,111,111');
		$color2_rgb = $wsdl->appendChild($color2_rgb);
		
		$color3_rgb = $xml->createElement('color3_rgb','111,111,111');
		$color3_rgb = $wsdl->appendChild($color3_rgb);



		$xml->formatOutput = true;
	    $el_xml = $xml->saveXML();
    	$xml->save('configuracion.xml');

	    //Mostramos el XML puro
    	echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>".
        htmlentities($el_xml)."<br/><br/><hr>";
?>
</body>
</html>