function validate(){
    var email=document.myForm.email.value;
    if(email==""){
        document.getElementById('email').innerHTML="Fill the box";
        document.myForm.email.focus();
        return false;
    }else{
        document.getElementById('email').innerHTML="";
    }

    var password=document.myForm.password.value;
    if(password==""){
        document.getElementById('pass').innerHTML="Fill the box";
        document.myForm.password.focus();
        return false;
    }else{
        document.getElementById('pass').innerHTML="";
    }
return true;
}