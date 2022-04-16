
function validate(){
    let user = prompt("Please enter your username");
    let pass = prompt("Please enter your password");
    person = user + ":" + pass
    if (person == null || person == "") {
      text = "Login failed";
    } else {
      text = "Hello " + person + "! How are you today?";
    }

    document.getElementById("hid").value = person;
}

function notifyNotLogged(){
  alert("Please log in to access this content!");
}