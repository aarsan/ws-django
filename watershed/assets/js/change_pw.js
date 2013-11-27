  function checkForm(form)
  {
  var status = false;  
  var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
    
    if(form.password.value != "" && form.password.value == form.verify.value) {

      if(form.password.value.length < 3) {
        DisplayAlert('PasswordLengthAlert',100,250);
        form.password.focus();
        return false;

     }
      
    } else {
      DisplayAlert('PasswordMatchAlert',100,250);
      form.password.focus();
      return false;
    }
     
    alert("Your password has been changed.");
    //DisplayAlert('AccountCreatedAlert',100,250); -- if enabled, alert pops up for a split second, then disappears.
    return true;

  }

  function DisplayAlert(id,left,top) {
document.getElementById(id).style.left=left+'px';
document.getElementById(id).style.top=top+'px';
document.getElementById(id).style.display='block';
}