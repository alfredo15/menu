<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

    <script src="js/jquery.js" language="javascript"></script>	


<script type="text/javascript">
    var levels;
    $(document).ready(function() 
    {
        $.ajax({
            type: "GET",
            url: "test.xml",
            dataType: "xml",
            success: function (xml) { 
                var $ul = xmlParser(xml, $('#ListContainer'));
				
            }
        });
    });

    function xmlParser(xml,ul) {
        $(xml).contents().each(function (i, el) 
        {
			alert(i);

            if (el.nodeName.toUpperCase() == "CHILDREN") 
            {
               $("<li>").text($(el).text()).appendTo($('ul:last')); // Append <li> Children
            }

				else if (el.nodeName.toUpperCase() == "NAME") 
				{
					$('<ul>').text($(el).text()).appendTo(ul);
					//$('<ul>').insertAfter($("li:last"));
				}

					else if ((el.nodeName.toUpperCase() == "PARENT") || (el.nodeName.toUpperCase() == "PARENTS")) 
					{
					   if($('ul').length == 0)
						{
							ul = ul.append('<ul>');
						}
						
						ul.append(xmlParser($(el),$("ul:last") )); // Recursively append the other Parent
					}
        });
        return ul;
    }
</script>

</head>

<body>

	<div id="ListContainer"></div>

</body>
</html>