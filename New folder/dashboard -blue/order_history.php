<!Doctype HTML>
<html>

<head>
    <title>Orders</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="order_history.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <style>
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

<body  style="overflow: auto;">
    <div id="mySidenav" class="sidenav">
        <p class="logo span"><span class="span">Apna</span>Mart</p>
        <!-- <a href="dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a> -->
        <a href="customer.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
        <a href="order_history.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
        <a href="product.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Products</a>
        <a href="logout.php" class="icon-a"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Logout</a>

    </div>
    <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Orders </span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Orders </span>
    </div>
    <div class="col-div-7">
        <div class="profile">
    
            <img src="images\admin2.png" class="pro-img" />
            <p>Apna Mart </p>
        </div>
    </div>
        <div class="clearfix"></div>
    </div>
    
        <div class="clearfix"></div>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="" style="width:70rem; margin:0rem 22rem  ;">
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                    </th>
                                    <th>ID</th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Date</th>

                                   
                                </tr>
                            </thead>
                            <tbody class="table-body">

                            <?php
		
			include 'connection.php';
            $que = mysqli_query($con, "select * from tbl_order");
            while ($ans = mysqli_fetch_assoc($que)) {	
            ?>
                                <tr class="cell-1">
                                    <td class="text-center">
                                    </td>
                                    <td><?php echo $ans['id']; ?></td>
                                    <td><?php echo $ans['productId']; ?></td>
                                    <td><?php echo $ans['productName']; ?></td>
                                    <td><?php echo $ans['quantity']; ?></td>
                                    <td><?php echo $ans['price']; ?></td>
                                    <td><?php echo $ans['date']; ?></td>

                                     </tr>
                           <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
      $(".span").css('visibility', 'hidden');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
      $(".span").css('visibility', 'visible');
 });

</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

    }); 
</script>

</body>