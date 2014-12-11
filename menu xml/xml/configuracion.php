<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
			$xml = simplexml_load_file('configuracion.xml');
			
			$sU = ""; $pr = ""; $pp = ""; $pc = ""; $co = ""; $c1rgb = ""; $c2rgb = "";
			$sG = ""; $az = ""; $c3rgb = ""; $nom_emp = "";

    		foreach($xml->WSDL as $item){
     		$sU .= $item->superUsuario;
			$pr .= $item->privilegios;
			$pp .= $item->properties;
			$pc .= $item->procesos;
			$co .= $item->control;
			$nom_emp .= $item->nom_emp;
			$c1rgb .= $item->color1_rgb;
			$c2rgb .= $item->color2_rgb;
			$c3rgb .= $item->color3_rgb;
			$sG .= $item->seguridad;
			$az .= $item->autoriza;
			}
			
			echo "SU:".$sU;
?>
</body>
</html>