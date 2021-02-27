
/*mostrar los precios de los productos a partir de select */

$(document).ready(function()
{

    $("#selector").change(function()
    {
    	$("#price1").val($("#selector").val());
    });

	$("#price1").val("");

});