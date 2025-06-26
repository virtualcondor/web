	$(document).ready(function() {
	
	<!--VALIDACION NOMBRE-->

		$("#cont").submit(function () {
    		if($("#nombre").val().length < 1) {  
       		 alert("Campo obligatorio, Por Favor escriba su Nombre");  
       		 return false;  
    		}  		
		}); 


	<!--VALIDACION EMAIL-->
		$("#cont").submit(function () {		  
    		if($("#mail").val().length < 1) {  
        	 alert("Campo obligatorio, Por Favor escriba su E-mail");  
        	 return false;  
    	}  

		if($("#mail").val().indexOf('@', 0) == -1 || $("#mail").val().indexOf('.', 0) == -1) {  
            alert("El E-mail parece incorrecta, vuelve a intentar");  
            return false;  
       	 }   
		}); 


	<!--VALIDACION MENSAJE-->
		$("#cont").submit(function () {
    		if($("#mensaje").val().length < 1) {  
        	 alert("Campo obligatorio, Por Favor escriba su Mensaje");  
        	 return false;  
    	 }  		
		}); 
			
	 
	 });