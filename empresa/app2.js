$(document).ready(function(){
    $('#searchp').keyup(function(event){
	    event.preventDefault();
	    let data= $('#form2').serializeArray();
	    $.post({
		    url:'action2p.php',
	        data:data,
	        success:function(response){
		         $('#response2').html(response);
            }
	    
	    })
    })
});