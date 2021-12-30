      function validation(){
    var text ;
    var username = document.forms["myForm"]["username"].value;
    var y1=/[A-z]+/g;
    var telphone=document.forms["myForm"]["telphone"].value;
    var email=document.forms["myForm"]["email"].value;
    var i1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var password=document.forms["myForm"]["psw"].value;
    var r-password=document.forms["myForm"]["psw-repeat"].value;
    
if(username==""||!username.match(y1)){
  text ="your UserName is required and alphabets only";
   document.getElementById("demo1").innerHTML = text; 
   return false;
}
if(email==""||!email.match(i1)){
  text ="your email Address is required and must be a valid email";
   document.getElementById("demo2").innerHTML = text; 
   return false;
}
if(telphone==""){
  text ="your telphone is required and number only";
   document.getElementById("demo3").innerHTML = text; 
   return false;
}

if(password==""||password.length<7||password.length>12){
  text ="your password is required and must be of length 7-12";
   document.getElementById("demo4").innerHTML = text; 
   return false;
}
if(r-password==""||password.length<7||password.length>12||r-password!=password){
  text ="your confirmation password is required";
   document.getElementById("demo5").innerHTML = text; 
   return false;
}
return true;
}  
    
