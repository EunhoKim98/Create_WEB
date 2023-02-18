function sendmail() {
    var email = document.getElementById("email2").value;
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '../mail.php';
  
    const emailField = document.createElement('input');
    emailField.type = 'hidden';
    emailField.name = 'email';
    emailField.value = email;
    form.appendChild(emailField);
  
    document.body.appendChild(form);
    form.submit();
  }
  
  
  
  
  