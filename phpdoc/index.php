<?php
session_start();
$username = $_SESSION['username'];
// $username = 'ccc0';
?>

<!DOCTYPE html>
<html>

<head>
	<title>My Contact</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="indexstyle.css" type="text/css">
	 
</head>

<body>
	<div class="container">
		<div style="height:50px;"></div>
		<div class="well" style="margin:auto; padding:auto; width:80%;">
			<span style="font-size:25px; color:blue">
				<center><strong>My Contact</strong></center>
			</span>
			<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
			
			<div style="height:50px;"></div>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<th>Name</th>
					<th>Telephone</th>
					<th>Action</th>
				</thead>
</body>
					<?php
					include('conn.php');
					// $username = 'ccc0';

					$query = mysqli_query($conn, "SELECT * FROM `user` WHERE lastname ='" . $username . "'");
					while ($row = mysqli_fetch_array($query)) {
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><span class="glyphicon glyphicon-earphone"> </span><?php echo $row['Telephone']; ?></td>
							<td>
								<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> ||
								<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('button.php'); ?>
							</td>
						</tr>
					<?php
					}

					?>
				</tbody>
			</table>
		</div>
		<?php include('add_modal.php'); ?>
	</div>
</body>

</html>