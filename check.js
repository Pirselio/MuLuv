//espressione regolare per controllo email
//https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function registerCheck(){
	var nome = document.getElementById("nome").value;
	var cognome = document.getElementById("cognome").value;
	var pwd = document.getElementById("pwd").value;
	var pwd2 = document.getElementById("pwd2").value;
	var user = document.getElementById("usr").value;
	
	var inputs = [nome,cognome,pwd,pwd2,user]; //controllo campi non vuoti
	for(var i=0;i<inputs.length;i++)	
		if(inputs[i].length == 0 ) return false;
	
	if(pwd != pwd2) return false; //password diverse
	
	if(!validateEmail(user)) return false; //controlla email
	
	return true;
}

function loginCheck(){
	var email = document.getElementById("email").value;
	var pwd = document.getElementById("password").value;
	
	if(email.length == 0 || pwd.length == 0) return false; //controllo campi non vuoti
	
	if(!validateEmail(email)) return false; 
	
	return true;
}