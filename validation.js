function Submit(){
  var emailRegex =  /^[\w\-\.\+]+\@[a-zA-Z\.\-]+\.[a-zA-z]{2,4}$/;
  var nameRegex=/^[a-zA-Z]+$/;
  var fname = document.form.Name.value,
    lname = document.form.LastName.value,
    femail = document.form.Email.value,
    
    fpassword = document.form.Password.value,
    fmonth = document.form.birthday_month.value,
    fday = document.form.birthday_day.value,
    fyear = document.form.birthday_year.value;
    
  if( fname == "" )
   {
     document.form.Name.focus() ;
   document.getElementById("errorBox").innerHTML = "enter the first name";
     return false;
   }else if(!nameRegex.test(fname)){
    document.form.Name.focus();
    document.getElementById("errorBox").innerHTML = "enter the valid name";
    return false;
   }
  if( lname == "" )
   {
     document.form.LastName.focus() ;
    document.getElementById("errorBox").innerHTML = "enter the last name";
     return false;
   }
   
   if (femail == "" )
  {
    document.form.Email.focus();
    document.getElementById("errorBox").innerHTML = "enter the email";
    return false;
   }else if(!emailRegex.test(femail)){
    document.form.Email.focus();
    document.getElementById("errorBox").innerHTML = "enter the valid email";
    return false;
   }
   
  
   
   
  if(fpassword == "")
   {
     document.form.Password.focus();
     document.getElementById("errorBox").innerHTML = "enter the password";
     return false;
   }
   
     if (fmonth == "") {
        document.form.birthday_month.focus();
    document.getElementById("errorBox").innerHTML = "select the birthday month";
        return false;
     }
   if (fday == "") {
        document.form.birthday_day.focus();
    document.getElementById("errorBox").innerHTML = "select the birthday day";
        return false;
     }
   if (fyear == "") {
        document.form.birthday_year.focus();
    document.getElementById("errorBox").innerHTML = "select the birthday year";
        return false;
     }
    if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
        document.getElementById("errorBox").innerHTML = "select your gender";
       return false;
      }
    if(fname != '' && lname != '' && femail != '' && fpassword != '' && fmonth != '' && fday != '' && fyear != ''){
      window.location.reload()  
      return true;  

      }
  
}
/[^0-9.]/