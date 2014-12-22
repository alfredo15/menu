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
				
				$(data).find('menu producto').each(function() 
				
				{
					prodNom = $(this).attr('nombre');
				 
					confNom = $(this).find('configuracion').attr('nombre');
					
					
	
					 if($(this).find('producto'))
					 {
						 hrefm = $(this).attr('nombre').toLowerCase();
						 hrefm = '/' + hrefm;
					 }
					 
					 
					 
					 else if($(this).find('configuracion programa'))
					 {
						 liga = $(this).find('programa').text().toLowerCase();
						 liga = href + '/' + liga;
						 //alert(liga);
					 }
					 
					 $('.timeline ul').append('<li><a href="'+hrefm+'">'+prodNom+'</a></li>');
					 		
							$(data).find('configuracion').each(function()
							{
							
							confNom = $(this).attr('nombre');
								
							if($(this).find('configuracion'))
							{
								href = $(this).attr('nombre').toLowerCase();
								href = '/' + href;
								href = hrefm + href;
								alert(href);
								
								 $('.timeline ul li').append('<ul><li><a href="'+href+'">'+confNom+'</a></li></ul>');
							}
								
								
								//alert(prodNom+' '+confNom);
								
								
								
								$(data).find('programa').each(function()
								{
									progNom = $(this).text();
									
									
								});
								
								
							}); 
				alert(hrefm);
					
					
				//$('.timeline').append('<ul>'+prodNom+'<ul>'+confNom+'<li>'+confNom+'</li></ul></ul>');	
				//$('.timeline').append('<ul>'+producto+'<ul>'+tconfig+'<li>'+tprograma+'</li></ul></ul>');
				
				/*$('.timeline').append('<li>'+producto+'</li>'); */
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