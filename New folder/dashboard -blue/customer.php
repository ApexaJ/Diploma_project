<!Doctype HTML>
<html>

<head>
	<title>Customers</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

	<style>
		.anchor-link {
			text-decoration: none;
			margin: 0px 6px;
			margin-right: 10px;
			color: white;
		}
		.dataTables_length select{
			color:white;
		}
		#myTable_wrapper {
			color: white;
		}
		#myTable_filter input{
			color:white;
		}
		#myTable_length{
			color:white;
		}
		.paginate_button {
			color:white;
		}
		
	</style>
</head>

<body style="overflow: auto;">

	<div id="mySidenav" class="sidenav">
		<p class="logo span"><span class="span">Apna</span>Mart</p>
		<!-- <a href="dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a> -->
		<a href="customer.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
		<a href="order_history.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
		<a href="product.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Products</a>
		<a href="logout.php" class="icon-a"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Logout</a>

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Customers</span>
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Customers</span>
			</div>

			<div class="col-div-6">
				<div class="profile">

					<img src="images\admin2.png" class="pro-img" />
					<p>Apna Mart </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
		<br />

		<table id="myTable">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email Id </th>
					<th>Contact Number</th>
					<th>Password</th>
					<th>City</th>
					<th>Country</th>
				</tr>
			</thead>
			<tbody>
				<?php
		
			include 'connection.php';
            $que = mysqli_query($con, "select * from tbl_customers");
            while ($ans = mysqli_fetch_assoc($que)) {	
            ?>
				<tr>
					<td>
						<?php echo $ans['name']; ?>
					</td>
					<td>
						<?php echo $ans['email']; ?>
					</td>
					<td>
						<?php echo $ans['phone']; ?>
					</td>
					<td>
						<?php echo $ans['pass']; ?>
					</td>
					<td>
						<?php echo $ans['city']; ?>
					</td>
					<td>
						<?php echo $ans['country']; ?>
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
	</div>
	</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
		</script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#myTable').DataTable();
		}); 
	</script>
</body>


</html>