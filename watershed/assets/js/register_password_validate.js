  function checkForm(form)
  {
  var status = false;  
  var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
    if(form.email_address.value.search(emailRegEx) == -1) {
      DisplayAlert('EmailAlert',100,250);
      form.email_address.focus();
      return false;
    }
    
    if(form.password.value != "" && form.password.value == form.verify.value) {
      if(form.password.value.length < 3) {
        DisplayAlert('PasswordLengthAlert',100,250);
        form.password.focus();
        return false;

      } if(form.nick_name.value == '') {
        DisplayAlert('NickNameAlert',100,250);
        form.nick_name.focus();
        return false;
      }
      
    } else {
      DisplayAlert('PasswordMatchAlert',100,250);
      form.password.focus();
      return false;
    }
     
    alert("Account created. Click ok to go to the login page");
    //DisplayAlert('AccountCreatedAlert',100,250); 
    return true;

  }

  function DisplayAlert(id,left,top) {
document.getElementById(id).style.left=left+'px';
document.getElementById(id).style.top=top+'px';
document.getElementById(id).style.display='block';
}