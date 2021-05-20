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
	req.open("GET", "detail.php?id="+id, true);
	req.send();

}


function editData(id){
	let req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var res = JSON.parse(this.responseText);
			console.log(typeof res);
			document.getElementById("hid").innerHTML = res.result.id;
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
	 let id = document.getElementById("hid").innerHTML;
	
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
			console.log(this.responseText);
			loadData();
		}
	}
	req.open("POST", "submit.php", true);
	
	req.send(frmData);
	


}

