function numero() {
 if ((event.keyCode < 48) || (event.keyCode > 57)){
 	alert('Solo se admiten numeros en este campo');
 	event.returnValue = false;
 }
}

function letras() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122)){
 	alert('Solo se admiten letras en este campo');
 	event.returnValue = false
 }
}
