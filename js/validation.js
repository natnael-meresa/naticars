



<script>
//password validation  
function validateform(){  
  //password validation
var password=document.myform.password.value;  
 var error="";
var illegalchars=/[\W_]/";
if (password.value==""){ 
       password.style.background = 'red';
  alert(" can't be blank");  
  return false;  
}else if(password.length<7||password.length<15){  
error = "The password lengthmust be 7. \n";
        password.style.background = 'Yellow';
        alert(error);
        return false;  
 
  } else if ( (password.value.search(/[a-zA-Z]+/)==-1) || (password.value.search(/[0-9]+/)==-1) ) {
        error = "The password must contain at least one numeral.\n";
        password.style.background = 'red';
        alert(error);
        return false;
 
    }else if (illegalChars.test(password.value)) {
        error = "The password contains illegal characters.\n";
        password.style.background = 'Yellow';
        alert(error);
        return false;
 
    }
	
	else{
		password.style.background='red';
	}
  retun true;
} 

if(password.value.search(/[0-9]+/)==1){
	error = "The username must not contain at least one numeral.\n";
        username.style.background = 'red';
        alert(error);
        return false;
}else{
	return true;
}

//password-repeat validation
var password=document.myform.password.value;  
var psw-repeat=document.myform.psw-repeat.value;  
  
if(password==psw-repeat){  
return true;  
}  
else{  
alert("password must be same!");  
return false; 
}

//tellphone validation
var num=document.myform.telphone.value;  
if ((telphone.value.search(/[0-9]+/)==-1)){  
  alert("error");
  telphone.style.backgroundColor='red';
  return false;  
}else if((telphone.value.search(/[a-zA-Z]+/)==1)){ 
 alert(error);
  telphone.style.backgroundColor='red'; 
  return false;  
  }else{
	  return true;
  } 
//email validation

var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);
email.style.backgroundColor='red'; 
  return false;  
  } else{
	  return true;
  } 
 
</script>  
