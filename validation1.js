function Submit(){
  var emailRegex =  /^[\w\-\.\+]+\@[a-zA-Z\.\-]+\.[a-zA-z]{2,4}$/;
  var phoneRegex=/^[0-9.]+$/;
  var cphone = document.form.CellPhone.value,
      hphone = document.form.HomePhone.value,
      wphone = document.form.WorkPhone.value,
      pemail = document.form.PersonalEmail.value,
      cemail = document.form.CompanyEmail.value,
   
  if( cphone == "" )
   {
     document.form.CellPhone.focus() ;
   document.getElementById("errorBox").innerHTML = "enter the cellphone number";
     return false;
   }else if(!phoneRegex.test(cphone)){
    document.form.CellPhone.focus();
    document.getElementById("errorBox").innerHTML = "enter the valid number";
    return false;
   }
    if( hphone == "" )
   {
     document.form.HomePhone.focus() ;
   document.getElementById("errorBox").innerHTML = "enter the homephone number";
     return false;
   }else if(!phoneRegex.test(hphone)){
    document.form.HomePhone.focus();
    document.getElementById("errorBox").innerHTML = "enter the valid number";
    return false;
   }
 if( wphone == "" )
   {
     document.form.WorkPhone.focus() ;
   document.getElementById("errorBox").innerHTML = "enter the workphone number";
     return false;
   }else if(!phoneRegex.test(wphone)){
    document.form.WorkPhone.focus();
    document.getElementById("errorBox").innerHTML = "enter the valid number";
    return false;
   }


   if (pemail == "" )
  {
    document.form.PersonalEmail.focus();
    document.getElementById("errorBox").innerHTML = "enter the email";
    return false;
   }else if(!emailRegex.test(femail)){
    document.form.PersonalEmail.focus();
    document.getElementById("errorBox").innerHTML = "enter the valid email";
    return false;
   }
    if (cemail == "" )
  {
    document.form.CompanyEmail.focus();
    document.getElementById("errorBox").innerHTML = "enter the email";
    return false;
   }else if(!emailRegex.test(femail)){
    document.form.CompanyEmail.focus();
    document.getElementById("errorBox").innerHTML = "enter the valid email";
    return false;
   }
   
    if(cphone != '' &&  hphone != '' && wphone != '' && pemail != '' && cemail != '' ){
      window.location.reload()  
      return true;  

      }
  
}