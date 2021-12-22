function validateName() {

      var name = document.getElementById('contact-name').value;
      if(name.length == 0) {
        producePrompt('Name is required<br>', 'name-error' , 'red')		
        return false;
    }

    if (!name.match(/^[A-Za-z\s]*$/)) {

        producePrompt('Invalid characters in Name field, only letters and space allowed<br>','name-error', 'red');
        return false;

    }
	producePrompt('','name-error','red');
	var message = document.getElementById('contact-message').value;
	var required = 30;
	var left = required - message.length;
	if (left == 0) {		
		document.getElementById('submitComment').disabled = false;
	}

	return true;

}

function validateEmail () {
	var email = document.getElementById('contact-email').value;

	  if(email.length == 0) {
		producePrompt('Invalid Email<br>','email-error', 'red');
		return false;

	}

	if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {

		producePrompt('Invalid Email<br>', 'email-error', 'red');
		return false;

	}
	producePrompt('','email-error','red');
	return true;
}

function validateMessage() {
	var message = document.getElementById('contact-message').value;
	var required = 30;
	var left = required - message.length;

	if (left > 0) {
		producePrompt('Atleast '+left + ' more characters required in message field','message-error','red');
		document.getElementById('submitComment').disabled = true;
		return false;
	}

	if (validateName()) {		
		document.getElementById('submitComment').disabled = false;
	}
	producePrompt('','message-error','red');
	return true;

}

function jsShow(id) {
  document.getElementById(id).style.display = 'block';
}

function jsHide(id) {
  document.getElementById(id).style.display = 'none';
}


function producePrompt(message, promptLocation, color) {
  document.getElementById(promptLocation).innerHTML = message;
  document.getElementById(promptLocation).style.color = color;
}

function validateForm() {
	if (!validateName() || !validateEmail() || !validateMessage()) {
	jsShow('submit-error');
	producePrompt('Please fix errors to submit.', 'submit-error', 'red');
	return false;
	}
	else {					
	}
}