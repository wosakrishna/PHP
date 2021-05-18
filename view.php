<?php
	include 'includes/connection.php';
	
	$query = mysqli_query($con, "SELECT * FROM profile");

	$data = '';
	while($row = mysqli_fetch_assoc($query)){
		$data.= "<tr>";
		$data.= "<td>$row[name]</td>";
		$data.= "<td>$row[email]</td>";
		$data.= "<td>$row[gender]</td>";
		$data.= "<td>$row[phone]</td>";
		$data.= "<td>
					<div class=\"btn-group\" role=\"group\">
					    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
					      Action
					    </button>
					    <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
					      <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\" onclick=\"viewData('$row[id]')\">View</a></li>
						  <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" data-bs-toggle=\"modal\" data-bs-target=\"#editModal\" onclick=\"editData('$row[id]')\">Edit</a></li>
					      <li><a class=\"dropdown-item\" href=\"javascript:void(0)\"  onclick=\"deleteData('$row[id]')\">DELETE</a></li>
					      
					    </ul>
  					</div>
			</td>";
		$data.="</tr>";
	}
	
	$res = [
		"result" => $data
	];

	header('Content-Type: Application/json');
	echo json_encode($res);

