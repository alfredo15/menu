<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
    <script src="js/jquery.js" language="javascript"></script>	
	
	<script>
	var prodNom,confNom,progNom;
	var x = 0;
			$.ajax({
			url : "xml/men.xml",
			dataType: "xml",
			success: function(data) {
				console.log(data);
				
				$(data).find('menu producto').each(function() {
					
				 prodNom = $(this).attr('nombre');
				 
				 	$('.timeline ul').append('<li>'+prodNom);
							
							$(data).find('configuracion').each(function()
							{
								
								confNom = $(this).attr('nombre');
				
								$('.timeline ul').append('<li>'+confNom);

								
								$(data).find('programa').each(function()
								{
									progNom = $(this).text();
									
									$('.timeline ul').append('<li>'+progNom+'</li></li></li>');
                                });
								
							}); 
					
				//$('.timeline').append('<ul>'+prodNom+'<ul>'+confNom+'<li>'+progNom+'</li></ul></ul>');	
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
       
    
</head>

<body>


    <div class="timeline">
    	<ul>
        </ul>
    </div>
    
    
</body>
</html>