<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>MENU KS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    
    	<!--<link type="image/x-icon " href="img/ks-clasico icono.png" rel="icon"/>-->


		<script src="js/jquery.js" language="javascript"></script>
        
        <link rel="stylesheet" type="text/css" href="estilos/reset.css">
            
        <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
        
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
	
		<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->

		<script type="text/javascript" src="js/menuresponsive.js"></script>	

		<!--<link rel="stylesheet" href="estilos/bootstrap.min.css">
		<link rel="stylesheet" href="estilos/estilos.css">
		<script src="js/bootstrap.min.js"></script>-->

	<script>
			$.ajax({
			url : "xml/men.xml",
			dataType: "xml",
			success: function(data)
			{
				var ul_main=$("<ul class='navbar-nav' />");
				console.log(data);
				$(data).find('menu producto').each(function(i) 
				{
					if($(this).children().length)
                    {
                        var ulSub = $("<ul class='dropdown-menu'/>");
						$(this).children().each(function()
						{
							if($(this).attr("nombre") !== undefined)
							{
								ulSub.append("<li class='dropdown'><a href='#' class='dropdown-toggle'>2"+$(this).attr("nombre")+"<b class='caret right'></b></a></li>");
							}
							else
							{
								ulSub.append("<li class='dropdown'><a href='#' class='dropdown-toggle'>2"+$(this).text()+"<b class='caret right'></b></a></li>");
							}
							
								var ulS = $("<ul />");
								$(this).children().each(function()
								{
									ulS.append("<li><a href=>3"+$(this).text()+"</a></li>");
								});
								ul_main.append(ulSub.append(ulS));
//								ulSub.append(ulS);
								
                        });
							var li = $("<li class='dropdown'><a href='#' class='dropdown-toggle'>"+$(this).attr("nombre")+"<b class='caret'></a></li>");
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

<header class="container">

	<nav class="navbar ">
		<nav class="container-fluid">
				
                <nav class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">			        
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </nav>

            <!--<div class="collapse navbar-collapse" id="menu">-->

		    <div class="timeline collapse navbar-collapse" id="menu"></div>
		</nav>
    </nav>
    
</header>

</body>
</html>