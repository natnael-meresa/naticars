
$(document).ready(function(){
	$('#gallery').load('../php/gallery.php');
	
      $('#profil').load('../php/profile.php');

      $('#mycars').load('../php/mycar.php');
      $('#mycars').on('click','.btnrm',function(){

    $id = $(this).attr('id');
    
         if (window.XMLHttpRequest) {

            
            xmlhttp = new XMLHttpRequest();
        } else {
            
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
         xmlhttp.onreadystatechange = function() {
            if (true) {
               	$("#main").load('../php/profile.php');
                
            }
        };
        xmlhttp.open("GET","rmcar.php?q="+$id,true);
        xmlhttp.send();
  });
 
    	
});