<?php
  session_start();
  if( $_SESSION['login'] = true && isset($_SESSION['login'])){
    header("location: customer.php");

 ?>

<!Doctype HTML>
<html>

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
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
    <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="customer.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
    <a href="order_history.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
    <a href="product.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Products</a>
    <a href="logout.php" class="icon-a"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Logout</a>

  </div>

  <div id="main">

    <div class="head">


      <div class="col-div-6">
        <span style="font-size: 30px; cursor:pointer; color: white; display: block;" class="nav">&#9776;
          Dashboard</span>
        <span style="font-size: 30px; cursor:pointer; color: white; display: none;" class="nav2">&#9776;
          Dashboard</span>
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

    <div class="col-div-3">
      <div class="box">
        <p>67<br /><span>Customers</span></p>
        <i class="fa fa-users box-icon"></i>
      </div>
    </div>

    <div class="col-div-3">
      <div class="box">
        <p>99<br /><span>Orders</span></p>
        <i class="fa fa-shopping-bag box-icon"></i>
      </div>
    </div>
    <div class="col-div-3">
      <div class="box">
        <p>78<br /><span>Products</span></p>
        <i class="fa fa-tasks box-icon"></i>
      </div>
    </div>
    <div class="clearfix"></div>
    <br /><br />
    <div class="col-div-8">
      <div class="box-8">
        <div class="content-box">
          <p>Top Selling Products </p>
          <br />
          <table id="myTable">
          <thead>
            <tr>
              <th>Seller Name</th>
              <th>Products</th>
              <th>Product Id </th>
            </tr>
  </thead>
  <tbody>
            <tr>
              <td>Ketul Kanabar</td>
              <td>Kurta</td>
              <td>01</td>
            </tr>
            <tr>
              <td>Apexa Gotecha</td>
              <td>Kurti</td>
              <td>02</td>
            </tr>
            <tr>
              <td>Hasti Ratanpara</td>
              <td>Home Decore</td>
              <td>03</td>
            </tr>
            <tr>
              <td>Drashti bakhalika</td>
              <td>Food</td>
              <td>04</td>
            </tr>
  </tbody>

          </table>
        </div>
      </div>
    </div>

    <div class="col-div-4">
      <div class="box-4">
        <div class="content-box">
          <p>Total Sale </p>

          <div class="circle-wrap">
            <div class="circle">
              <div class="mask full">
                <div class="fill"></div>
              </div>
              <div class="mask half">
                <div class="fill"></div>
              </div>
              <div class="inside-circle"> 70% </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(".nav").click(function () {
      $("#mySidenav").css('width', '70px');
      $("#main").css('margin-left', '70px');
      $(".logo").css('visibility', 'hidden');
      $(".logo span").css('visibility', 'visible');
      $(".logo span").css('margin-left', '-10px');
      $(".icon-a").css('visibility', 'hidden');
      $(".icons").css('visibility', 'visible');
      $(".icons").css('margin-left', '-8px');
      $(".nav").css('display', 'none');
      $(".nav2").css('display', 'block');
      $(".span").css('visibility', 'hidden');
    });

    $(".nav2").click(function () {
      $("#mySidenav").css('width', '300px');
      $("#main").css('margin-left', '300px');
      $(".logo").css('visibility', 'visible');
      $(".icon-a").css('visibility', 'visible');
      $(".icons").css('visibility', 'visible');
      $(".nav").css('display', 'block');
      $(".nav2").css('display', 'none');
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


</html>

<?php
  }else{
    header('location:index.php');
  }
?>