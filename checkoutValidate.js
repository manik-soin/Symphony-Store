function InvalidMsg(textbox) {
  
            if (textbox.value == '') {
                textbox.setCustomValidity
                      ('Please do not leave the fields empty');
            }  else {
                textbox.setCustomValidity('');
            }
  
            return true;
        }
		document.addEventListener('click', function(e){
		    if( e.target.id=='createAccount' && e.target){
		        var input = document.getElementById( "name" ).value; 
		              
        		var span = document.getElementById( "invalidInput" );  

		        outputString = "";  
		        var httpRequest = new XMLHttpRequest();  
		        httpRequest.onreadystatechange = function() {  
		            if ( httpRequest.status == 200 && httpRequest.readyState == 4) {  
		                var response=httpRequest.responseText;  
		                var res;             
		                try{
		                    res= JSON.parse(response);  
		                }catch( e ){  
		                    return;  
		                }  
		                  
		                for( var i = 0; i <= res.length-1; i++ ){
		                   
		                    outputString = res[i].out + outputString;         

		                }
		                span.innerHTML=outputString;   
		            }}; 
		          

		         
		        httpRequest.open( "GET", "checkoutCreatecreateAccount.php?input=" + input, true );  
		        httpRequest.send();  
		    
		}});
