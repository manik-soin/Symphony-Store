window.onload = () => {
    var searchButton = document.getElementById("searchButton");
    
    var sb= document.getElementById('searchBar')
    
    searchButton.addEventListener("click",searchBar);

    
  

    function searchBar(){  
          
        var search_term = document.getElementById( "searchBar" ).value;  
        document.getElementById( "searchHeader" ).innerHTML="Searching Results";
        var out = document.getElementById( "output" );  
          


        outputString = "";  
        var httpRequest = new XMLHttpRequest();  
        httpRequest.onreadystatechange = function() {  
            if ( httpRequest.status == 200 && httpRequest.readyState == 4 ) {  
                var response=httpRequest.responseText;  
                var res;             
                try{ res= JSON.parse(response);  
                }catch(e){  
                    return;  
                }  
                  
                for( var i = 0; i <= res.length-1; i++ ){
             
                    outputString += "<span class="+'"container"'+"><a class="+'"title"'+" href="+'"musicDetails.php?musicId='+res[i].MusicName+'"'+">"+res[i].MusicName+"</a>"+"<div class="+'"img_container"'+"><img class="+'"musician"'+"src="+'"Materials/img_' + res[i].MusicId + '.jpg"'+" alt= "+'"Musician Image"'+"></div>";
                    if(res[i].NewArrival=="1"){
                        outputString +="<span class="+'"NewArrival"'+">NEW ARRIVAL !</span><br>";
                    }
                    outputString += "<span class="+'"composer"'+">Composer: "+res[i].Composer+"</span><br>";
                    outputString += "<span class="+'"price"'+">Price: $ "+res[i].Price+"</span></span>";              

                }
                out.innerHTML=outputString;   
            }  
        };  

        if (!/\S/.test(search_term)) {
            document.getElementById( "searchHeader" ).innerHTML="All Music";
            httpRequest.open( "GET", "searchBar.php", true );
     
        }
        else{  
        httpRequest.open( "GET", "searchBar.php?search_term=" + search_term, true );}  
        httpRequest.send();  
    };


      sb.addEventListener('search',OnSearch);
     function OnSearch() {
        if(!/\S/.test(sb.value)) {
            sb.value=" ";
            
            searchBar();
        }
    };


};


