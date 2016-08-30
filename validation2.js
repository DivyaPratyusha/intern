
$(document).ready(function() {
$('#submit').click(function(e) {
var firstname = $('#firstname').val();
var lastname = $('#lastname').val();
var addr = $('#addr').val();
var zip = $('#zip').val();
var email = $('#email').val();
var name_regex = /^[a-zA-Z]+$/;
var lname_regex = /^[a-zA-Z]+$/;
var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
var add_regex = /^[0-9a-zA-Z\-]+$/;
var zip_regex = /^[0-9]+$/;
// To Check Empty Form Fields.
if (firstname.length == 0) {
$('#head').text("* All fields are mandatory *"); 
$("#firstname").focus();
return false;
}
else if (!firstname.match(name_regex) || firstname.length == 0) {
$('#p1').text("* For your name please use alphabets only *"); 
$("#firstname").focus();
return false;
}
else if (!lastname.match(lname_regex) || lastname.length == 0) {
$('#p2').text("* For your name please use alphabets only *");
$("#lastname").focus();
return false;
}
else if (!email.match(email_regex) || email.length == 0) {
$('#p3').text("* Please enter a valid email address  *"); 
$("#email").focus();
return false;
}

else if (!addr.match(add_regex) || addr.length == 0) {
$('#p4').text("* For Address please use numbers and letters *"); 
$("#addr").focus();
return false;
}
else if (!zip.match(zip_regex) || zip.length == 0) {
$('#p5').text("* Please enter a valid zip code *"); 
$("#zip").focus();
return false;
} else {
return true;

}
});
});