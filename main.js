function submit(){
	let name = document.getElementById("name").value;
	let email = document.getElementById("email").value;
	let phone = document.getElementById("phone").value;
	let gender = document.getElementById("gender").value;

	var x = document.getElementById("snackbar");


	let frmData = new FormData();
	frmData.append("nm", name);
	frmData.append("em", email);
	frmData.append("ph", phone);
	frmData.append("gn", gender);

	let req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			console.log(this.responseText);

			
			x.className = "show";
			setTimeout(function(){ x.className = x.className.replace("show", ""); }, 9000);
		
		
		}
	}
	 req.open("POST", "submit.php", true);

	req.send(frmData);
	
}	