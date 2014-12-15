<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

    <script src="js/jquery.js" language="javascript"></script>	


<script type="text/javascript">
    var levels;
	var x = 0;
    $(document).ready(function() 
    {
        $.ajax({
            type: "GET",
            url: "men.xml",
            dataType: "xml",
            success: function (xml) { 
                var $ul = xmlParser(xml, $('#ListContainer'));
            }
        });
    });

    function xmlParser(xml,ul) {
        $(xml).contents().each(function (i, el) 
        {
			x = x + 1;
			alert(x);
			
            if (el.nodeName.toUpperCase() == "PROGRAMA") 
            {
               $("<li>").text($(el).text()).appendTo($('ul:last')); // Append <li> Children
            } else if (el.nodeName.toUpperCase() == "CONFIGURACION") 
            {
                $('<li>').text($(el).text()).appendTo(ul);
                $('<ul>').insertAfter($("li:last"));
            }
            else if ((el.nodeName.toUpperCase() == "MENU")) 
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