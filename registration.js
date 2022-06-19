function validate(){
    var name=document.myForm.name.value;
    if(name==""){
        document.getElementById('one').innerHTML="enter your name";
        document.myForm.name.focus();
        return false;
    }else{
        document.getElementById('one').innerHTML="";
    }

    var mail=document.myForm.email.value;
    var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var result=reg.test(mail);
    if(result==false){
        document.getElementById('two').innerHTML="Enter your email id";
        document.myForm.email.focus();
        return false;
    }else{
        document.getElementById('two').innerHTML="";
      
    }

    var cmail=document.myForm.cemail.value;
    if(cmail != mail){
        document.getElementById('three').innerHTML="Email is incorrect";
        document.myForm.cemail.focus();
        return false;
    }else{
        document.getElementById('three').innerHTML="";
    }

    var password=document.myForm.password.value;
    var reg=/^[A-Za-z0-9]\w{7,}$/;
    var result=reg.test(password);
    if(result==false){
        document.getElementById('four').innerHTML="Atleast 8 charecters";
        document.myForm.password.focus();
        return false;
    }else{
        document.getElementById('four').innerHTML="";
    }

    var vpassword=document.myForm.vpassword.value;
    if(vpassword != password){
        document.getElementById('five').innerHTML="Password does'nt match";
        document.myForm.vpassword.focus();
        return false;
    }else{
        document.getElementById('five').innerHTML="";
    }

    var mobileNo=document.myForm.mobileNo.value;
    if(mobileNo =="" || isNaN(mobileNo)){
        document.getElementById('six').innerHTML="Fill the box";
        document.myForm.mobileNo.focus();
        return false;
    }else{
        document.getElementById('six').innerHTML="";
    }

    var phoneNo=document.myForm.phoneNo.value;
    if(phoneNo =="" || isNaN(phoneNo)){
        document.getElementById('seven').innerHTML="Phone number";
        document.myForm.phoneNo.focus();
        return false;
    }else{
        document.getElementById('seven').innerHTML="";
    }

    var state=document.myForm.state.value;
    if(state ==""){
        document.getElementById('eight').innerHTML="Select your state";
        document.myForm.state.focus();
        return false;
    }else{
        document.getElementById('eight').innerHTML=""
    }

    var city=document.myForm.city.value;
    if(city==""){
        document.getElementById('nine').innerHTML="Select your city";
        document.myForm.city.focus();
        return false;
    }else{
        document.getElementById('nine').innerHTML="";
    }

    var address=document.myForm.address.value;
    if(address==""){
        document.getElementById('ten').innerHTML="Enter your address";
        document.myForm.address.focus();
        return false;
    }else{
        document.getElementById('ten').innerHTML="";
    }

    var pincode=document.myForm.pin.value;
    if(pincode=="" || isNaN(pincode)){
        document.getElementById('eleven').innerHTML="Provide your pin code";
        document.myForm.pin.focus();
        return false;
    }else{
        document.getElementById('eleven').innerHTML="";
    }


    return true;

}