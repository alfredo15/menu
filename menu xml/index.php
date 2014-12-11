<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
    <script src="js/jquery.js" language="javascript"></script>	
	
	<script>
			$.ajax({
			url : "xml/men.xml",
			dataType: "xml",
			success: function(data) {
				console.log(data);
				
				$(data).find('menu producto').each(function() {
				
				//var menu = $(data).find('menu producto').length;
				
				var menu = $(data).find('menu producto').text();
				
				var producto = $(this).attr('nombre');
					
				var config = $(this).find('configuracion').length;
				
				var tconfig = $(this).find('configuracion').attr('nombre');

				var programa = $(this).find('programa').length;
				
				var tprograma = $(this).find('programa').text();
				
				alert('Total Nodos: '+menu+
					  '\nProducto:'+ producto +
					  '\nConfiguracion N°: '+config+ 
					  '\nPrograma: '+programa);
					  
						
							/*$(data).find('configuracion').each(function(producto) {
							
							var nomconf = $(this).attr('nombre');
						  
						  var pgm = $(this).find('programa').length;
				
						  var tpgm = $(this).find('programa').text();
						  
						  alert('Nom.Conf.:'+nomconf+
						  		'\nNom.Prog.:'+tpgm);
                    });*/
				
				//$('.timeline').append('<ul>'+producto+'<ul>'+tconfig+'<li>'+tprograma+'</li></ul></ul>');

				/*$('.timeline').append('<ul>'+id+'</ul>');
				$('.timeline').append('<li>'+producto+'</li>'); */
				/*$('.timeline ul').append($('<li />',{configuracion : + producto,nombre : + id}));*/
                });
				
				
				
			},
			error: function()
			{
				$(".timeline").text("No se pudeo obtener la peticion.")
			}
		});
	</script>
    
    <!--<script>
	$(document).ready(function() {
        $.get("xml/men.xml",{},function(xml){
			$('menu producto',xml).each(function(i) {
                
				var pname = $(this).find("producto").attr("nombre");
				
				alert(pname);
            });})
    });
	</script>-->
    
    
</head>

<body>


    <div class="timeline">
    	
    </div>
    
    
</body>
</html>