// document.getElementById("tdata").innerHTML = "this.responseText";

function loadData(){
	let req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var response = JSON.parse(this.responseText);
			// console.log(response.result);
			document.getElementById("tdata").innerHTML = response.result;
		}
	}
	req.open("POST", "view.php", true);
	req.send();
}
loadData();

function viewData(id){
	let req = new XMLHttpRequest();
	req.open("GET", "detail.php?id="+id, true);
	req.send();
	
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var res = JSON.parse(this.responseText);
			console.log( res);
			document.getElementById("sname").innerHTML = res.result.name;
			document.getElementById("semail").innerHTML = res.result.email;
			document.getElementById("sphone").innerHTML = res.result.phone;
			document.getElementById("sgender").innerHTML = res.result.gender;
		}
	}
	

}


function editData(id){
	let req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var res = JSON.parse(this.responseText);
			console.log(typeof res);
			document.getElementById("hid").value = res.result.id;
			document.getElementById("ename").value = res.result.name;
			document.getElementById("eemail").value = res.result.email;
			document.getElementById("ephone").value = res.result.phone;
			document.getElementById("egender").value = res.result.gender;
		}
	}
	req.open("GET", "edit.php?id="+id, true);
	req.send();
}




function Update(){
	let id = document.getElementById("hid").value;
	let name = document.getElementById("ename").value;
	let email = document.getElementById("eemail").value;
	let phone = document.getElementById("ephone").value;
	let gender = document.getElementById("egender").value;

	let frmData = new FormData();
	frmData.append("id", id);
	frmData.append("nm", name);
	frmData.append("em", email);
	frmData.append("ph", phone);
	frmData.append("gn", gender);

	let req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			console.log(this.responseText);
			loadData();
		}
	}
	req.open("POST", "update.php", true);
	
	req.send(frmData);
	

}


function deleteData(id)
{
	let req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			console.log(this.responseText);
			loadData();
			
		}
	}
	req.open("POST", "delete.php?id="+id, true);
	req.send();
		
}


function submit(){
	let name = document.getElementById("name").value;
	let email = document.getElementById("email").value;
	let phone = document.getElementById("phone").value;
	let gender = document.getElementById("gender").value;

	let frmData = new FormData();
	frmData.append("nm", name);
	frmData.append("em", email);
	frmData.append("ph", phone);
	frmData.append("gn", gender);

	let req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let response = JSON.parse(this.responseText);
			console.log(response);
			// {"result":{"name":"","email":"Email already exists","phone":"Contact already exists","gender":"Gender is empty"}}
			document.getElementById("nameErr").innerHTML = document.getElementById("emailErr").innerHTML = document.getElementById("phoneErr").innerHTML = document.getElementById("genderErr").innerHTML = "";

			document.getElementById("name").classList.remove("is-invalid");
			document.getElementById("email").classList.remove("is-invalid");
			document.getElementById("phone").classList.remove("is-invalid");
			document.getElementById("gender").classList.remove("is-invalid");

			
			if(response.result.name){
				document.getElementById("nameErr").innerHTML = response.result.name;
				document.getElementById("name").classList.add("is-invalid");
			}

			if(response.result.email){
				document.getElementById("emailErr").innerHTML = response.result.email;
				document.getElementById("email").classList.add("is-invalid");
			}

			if(response.result.phone){
				document.getElementById("phoneErr").innerHTML = response.result.phone;
				document.getElementById("phone").classList.add("is-invalid");
			}

			if(response.result.gender){
				document.getElementById("genderErr").innerHTML = response.result.gender;
				document.getElementById("gender").classList.add("is-invalid");
			}

			if(response.result.msg){
				$('#exampleModal').modal('hide');
				$('#exampleModal form').trigger('reset');
				loadData();
				document.getElementById("res").innerHTML = response.result.msg;
			}
			

		}
	}
	req.open("POST", "submit.php", true);
	
	req.send(frmData);
	


}

