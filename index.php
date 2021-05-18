<?php 
	include 'includes/header.php'; 
	include 'includes/connection.php';
	include 'includes/modal.php'; 
?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add data
</button>
<div id="res"></div>
<div class="container">
	<div class="row">
		<div class="col-md-10 m-auto">
			<table class="table table-striped table-bordered">
				<thead><tr><th>Name</th><th>Email</th><th>Gender</th><th>Phone</th><th>Action</th></tr></thead>
				<tbody id="tdata">
					
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php include 'includes/footer.php'; ?>