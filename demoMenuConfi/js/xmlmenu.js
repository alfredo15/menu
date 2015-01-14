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
						if($(this).find('producto'))
						{
							hrf = $(this).attr('nombre').toLowerCase();
							hrf = hrf;
							hrf = $.trim(hrf);
						}
												
                        var ulSub = $("<ul class='dropdown-menu'/>");
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
																		
								l = $("<li class='dropdown'><a href='"+href+"' class='dropdown-toggle'>"+$(this).attr("nombre")+"<b class='caret right'></b></a></li>");
							}
							else if($(this).text())
							{
										if($(this).text())
										{
											if($(this).text() !== undefined)
											{
												href = $(this).text().toLowerCase();
												href = hrf+"/"+href;	
											}
										}
								
								l = $("<li class='dropdown'><a href='"+href+"' class='dropdown-toggle'>"+$(this).text()+"<b class='caret right'></b></a></li>");
							}
							
								var ulS = $("<ul class='dropdown-menu'/>");
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
									ulS.append("<li><a href='"+lin+"'>"+$(this).text()+"</a></li>");
								});
								ulSub.append(l.append(ulS));
                        });
							var li = $("<li class='dropdown'><a href='"+hrf+"' class='dropdown-toggle'>"+$(this).attr("nombre")+"<b class='caret'></a></li>");
							ul_main.append(li.append(ulSub))
                    }
                });
				$(".timeline").append(ul_main);
			},
			error: function()
			{
				$(".timeline").text("No se pudeo obtener la peticion.")
			}
		});
