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
				
				$(data).find('producto').each(function(i) {
					
				 prodNom = $(this).attr('nombre');

					
							
							if($(this).val('producto'))
							{
								//$('.timeline ul').append('<li>'+prodNom+'</li>');
								x = x + 1;
								alert("Producto "+x);
							}
							if($(this).val('configuracion'))
							{
								$(data).find('configuracion').each(function(b)
								{
									confNom = $(this).attr('nombre');
									$('.timeline').append('<li>'+confNom+'</li>');
								}); 
							}
							/*
							$(data).find('configuracion').each(function(b)
							{
								confNom = $(this).attr('nombre');
								$('.timeline').append('<li>'+confNom+'</li>');

								$(data).find('programa').each(function(c)
								{
									progNom = $(this).text();
									$('.timeline').append('<li>'+progNom+'</li>');
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