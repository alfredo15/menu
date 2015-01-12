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
				var ul_main=$("<ul />"); //
				console.log(data);
				$(data).find('menu producto').each(function(i) 
				{
					if($(this).children().length)
                    {
                        var ulSub = $("<ul />"); //
						$(this).children().each(function()
						{
							if($(this).attr("nombre") !== undefined)
							{
								ulSub.append("<li><a href=>2 "+$(this).attr("nombre")+"</a></li>");
							}
							else
							{
								ulSub.append("<li><a href=>2 "+$(this).text()+"</a></li>");
							}
							
								var ulS = $("<ul />");
								$(this).children().each(function()
								{
									ulS.append("<li><a href=>3 "+$(this).text()+"</a></li>");
								});
								ul_main.append(ulSub.append(ulS))
                        });
							var li = $("<li><a href>1 "+$(this).attr("nombre")+"</a></li>");
							ul_main.append(li.append(ulSub))
                    }
                    /*else 
						ul_main.append ("<li><a href=>"+$(this).text()+"</a></li>");*/
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