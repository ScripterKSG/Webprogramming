function validateForm(){
	var radio1 = document.getElementsByName("one")
	var answered = false
	for (i = 0; i < radio1.length; i++){
		if (radio1[i].checked){
			answered = true
			break
		}
	}
	if (answered == false){
		alert("Please answer all questions!")
		return false
	}


	var radio2 = document.getElementsByName("two")
	answered = false
	for (i = 0; i < radio2.length; i++){
		if (radio2[i].checked){
			answered = true
			break
		}
	}
	if (answered == false){
		alert("Please answer all questions!")
		return false
	}
	
	var checkbox3 = document.getElementsByName("three[]")
	answered = false
	for (i = 0; i < checkbox3.length; i++){
		if (checkbox3[i].checked){
			answered = true
			break
		}
	}
	if (answered == false){
		alert("Please answer all questions!")
		return false
	}

	var checkbox4 = document.getElementsByName("four[]")
	answered = false
	for (i = 0; i < checkbox4.length; i++){
		if (checkbox4[i].checked){
			answered = true
			break
		}
	}
	if (answered == false){
		alert("Please answer all questions!")
		return false
	}

	var blank5 = document.getElementById("five2").value
	var dummy = blank5.toString().trim()
	if (blank5 == null || dummy === ''){
		alert("Please answer all questions!")
		return false
	
	}
	var blank6 = document.getElementById("six2").value
	dummy = blank6.toString().trim()
	if (blank6 == null || dummy === ''){
		alert("Please answer all questions!")
		return false
	}
	return true
}
