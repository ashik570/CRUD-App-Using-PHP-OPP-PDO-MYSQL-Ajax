<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crud App Using PHP-OPP, PDO-MYSQL & AJAX</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
	<link rel="stylesheet" href="">
</head>
<body>
	 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#" ><i class="fab fa-wolf-pack-battalion"></i>&nbsp;Wolf</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Blog</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contact</a>
	      </li>
	    </ul>
	  </div>
	</nav> 

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="text-center text-danger font-weight-normal my-3">CRUD Application Using Bootstrap 4, PHP-OPP, PDO-OPP, PDO-MySQL, Ajax, DataTable & SweetAlert 2</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<h4 class="mt-2 text-primary">All users in database!</h4>
			</div>
			<div class="col-lg-6">
				<button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg"></i>&nbsp;Add New User</button>
				<a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i>&nbsp;Export to Excel</a>
			</div>
		</div>
		<hr class="my-1">
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive" id="showUser">
					<table class="table table-striped table-sm table-bordered">
						<thead>
							<tr class="text-center">
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>E-Mail</th>
								<th>Phone</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=1; $i<=100; $i++): ?>
							<tr class="text-center text-secondary">
								<td><?= $i ?></td>
								<td>User <?= $i ?></td>
								<td>Title <?= $i ?></td>
								<td>email.<?= $i ?>@gmail.com</td>
								<td>1254896374</td>
								<td>
                                   <a href="#" title="View Details" class="text-success"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                                   <a href="#" title="Edit" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                                   <a href="#" title="Delete" class="text-danger"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
								</td>
							</tr>
						    <?php endfor; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- Add New User Modal -->
	<div class="modal fade" id="addModal">
	    <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">Add New User</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body px-4">
	          <form action="" method="post" id="form-data">
	          	<div class="form-group">
	          		<input type="text" name="fname" class="form-control" placeholder="First Name" required>
	          	</div>

	          	<div class="form-group">
	          		<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
	          	</div>

	          	<div class="form-group">
	          		<input type="email" name="email" class="form-control" placeholder="E-Mail" required>
	          	</div>

	          	<div class="form-group">
	          		<input type="tel" name="phone" class="form-control" placeholder="Phone" required>
	          	</div>
	          	<div class="form-group">
	          		<input type="submit" name="insert" id="insert" value="Add User" class="btn btn-danger btn-block">
	          	</div>
	          </form>
	        </div>
	        
	      </div>
	    </div>
  	</div>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("table").DataTable();
		});
	</script>
</body>
</html>