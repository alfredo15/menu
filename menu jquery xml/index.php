<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<link type="image/x-icon " href="img/ks-clasico icono.png" rel="icon"/>


<script src="js/jquery.js" language="javascript"></script>	

<link rel="stylesheet" href="estilos/bootstrap.min.css">

<script src="js/bootstrap.min.js"></script>
	
    
	
	<script>
			$.ajax({
			url : "xml/men.xml",
			dataType: "xml",
			success: function(data)
			{
				var ul_main=$("<ul />");
				console.log(data);
				$(data).find('menu producto').each(function(i) 
				{
					
					if($(this).children().length)
                    {
						if($(this).find('producto'))
						{
							hrf = $(this).attr('nombre').toLowerCase();
							hrf = hrf;
							hrf = $.trim(hrf);
						}

                        var ulSub = $("<ul />");
						
						$(this).children().each(function()
						{
							
							if($(this).attr("nombre") !== undefined)
							{
								if($(this).attr("nombre"))
								{
									if($(this).attr("nombre") !== undefined)
									{
										href = $(this).attr("nombre").toLowerCase();
										href = hrf+"/"+href;
									}
								}
								ulSub.append("<li><a href='"+href+"'>"+$(this).attr("nombre")+"</a></li>");
							}
							
							else
							{
								if($(this).text())
								{
									if($(this).text() !== undefined)
									{
										href = $(this).text().toLowerCase();
										href = hrf+"/"+href;
									}
								}
								
								
								ulSub.append("<li><a href='"+href+"'>"+$(this).text()+"</a></li>");

							}
							
							
							if($(this).children().length)
							{
								
								$(this).children().each(function()
								{
									if($(this).text())
									{
										if($(this).text() !== undefined)
										{
											lin = $(this).text().toLowerCase();
											lin = href+"/"+lin;
										}
									}
									ulSub.append("<ul><li><a href='"+lin+"'>"+$(this).text()+"</a></li></ul>");
								});
								
									//ulSub.append("<li><a>"+$(this).text()+"</a></li>");
							}
                        });
							
							var li = $("<li><a href="+hrf+">"+$(this).attr("nombre")+"</a></li>");
							ul_main.append(li.append(ulSub))
							
                    }
					
                    else 
						ul_main.append ("<li><a href=>"+$(this).text()+"</a></li>");
                });
				
				$(".timeline").append(ul_main);
			},
			
			error: function()
			{
				$(".timeline").text("No se pudeo obtener la peticion.")
			}
		});
	</script>
      
    
</head>

<body>

    <div class="timeline"></div>
    
    
</body>
</html>