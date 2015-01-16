			$.ajax({
			url : "xml/men.xml",
			dataType: "xml",
			success: function(data)
			{
				var ul_main=$('<ul/>');
				
				console.log(data);
				$(data).find('menu producto').each(function(i) 
				{
					if($(this).children().length > 1)
                    {
						if($(this).find('producto'))
						{
							hrf = $(this).attr('nombre').toLowerCase();
							hrf = hrf;
							hrf = $.trim(hrf);
						}
												
                        var ulSub = $("<ul>");
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
								l = $("<li class='has-sub'><a href='"+href+"'>"+$(this).attr("nombre")+"</a></li>");
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
								
								l = $("<li class='has-sub'><a href='"+href+"'>"+$(this).text()+"</a></li>");
							}
							
								var ulS = $("<ul>");
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
							//var li = $("<li id='li_menu' class='has-sub'><a href='"+hrf+"'>1"+$(this).attr("nombre")+"</a></li>");
							li = $("<li class='has-sub'><a href='"+hrf+"'>"+$(this).attr("nombre")+"</a></li>");
							
							ul_main.append(li.append(ulSub))
                    }
                });
				$("#cssmenu").append(ul_main);
			},
			error: function()
			{
				$("#cssmenu").text("No se pudeo obtener la peticion.")
			}
		});
