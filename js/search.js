
function showcar(by,tobe) {
    
        if (window.XMLHttpRequest) {
            
            xmlhttp = new XMLHttpRequest();
        } else {
        
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function() {
            if (true) {
               
                document.getElementById("gallery").innerHTML = this.responseText;
            }
        };
        
        xmlhttp.open("GET","search.php?p=" + by + "&q=" + tobe,true);
        xmlhttp.send();
}