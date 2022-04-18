
function validate(){
    let user = prompt("Please enter your username");
    let pass = prompt("Please enter your password");
    var person = user.concat(":", pass);
    if (user == null || user == "") {
      return false;
}
    document.getElementById("hid").value = person;
	return true;
}

function notifyNotLogged(){
  alert("Please log in to access this content!");
}
