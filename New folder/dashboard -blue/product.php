<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>

  <head>
    <title>Product</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

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
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Product</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Product</span>
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
    <style>
      .button {
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 2px;
        cursor: pointer;
      }

      .btn {
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 2px;
        cursor: pointer;
      }

      .fa-plus,
      .fa-trash {
        margin-right: 10px;
      }

      .fa-pencil-square-o {
        color: #fff;
      }

      .dataTables_length select {
        color: white;
      }

      #myTable_wrapper {
        color: white;
      }

      #myTable_filter input {
        color: white;
      }

      #myTable_length {
        color: white;
      }

      .paginate_button {
        color: white;
      }
    </style>
    </head>

    <body>

      <div id="large-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                Add Product
              </h3>
              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="large-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <form action="handleproduct.php" method="post" class="form" id="kt_form" enctype="multipart/form-data">
                <input type="hidden" name="Work" value="add">

                <div class="mb-6">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                    Name</label>
                  <input type="text" id="email" name="pname"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
                </div>
                <!-- <div class="mb-6">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                    Category</label>
                  <input type="text" id="password" name="category"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
                </div> -->
                <div class="mb-6">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                    Price</label>
                  <input type="text" id="password" name="price"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
                </div>
                <div class="mb-6">
                  <label for="repeat-password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                  <input type="text" name="desc" id="repeat-password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
                </div>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                  Product Image</label>
                <input
                  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                  id="file_input" type="file" name="image">
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <input data-modal-hide="large-modal" type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                value="Add Product">
              <button data-modal-hide="large-modal" type="button"
                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
          </div>
        </div>
        </form>
      </div>



      <button class="button" data-modal-target="large-modal" data-modal-toggle="large-modal"><i
          class="fa fa-plus"></i>Add Products</button>

      <br>
      <table id="myTable" class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase ">
          <tr>

            <th scope="col" class="px-6 py-3">
              Product ID
            </th>
            <th scope="col" class="px-6 py-3">
              Product Image
            </th>
            <th scope="col" class="px-6 py-3">
              Product Name
            </th>
            <!-- <th scope="col" class="px-6 py-3">
              Product Category
            </th> -->
            <th scope="col" class="px-6 py-3">
              Product Price
            </th>
            <th scope="col" class="px-6 py-3">
              Action
            </th>
          </tr>
        </thead>
        </tr>
        <?php
        $que = mysqli_query($con, "select * from tbl_product");
        while ($ans = mysqli_fetch_assoc($que)) {
          ?>
          <tr class=" border-b ">
            <td class=" py-4">
              <?php echo $ans['productId']; ?>
            </td>
            <td class="px-6 py-4">
              <img class="rounded-full" height="auto" width="100px" src="<?php echo $ans['image']; ?>" alt="Jese image">

            </td>

            <td class="px-6 py-4">
              <div class="text-white text-base font-semibold">
                <?php echo $ans['productName']; ?>
              </div>
            </td>
            <!-- <td class="px-6 py-4">
              <?php echo $ans['type']; ?>
            </td> -->
            <!-- <td class="px-6 py-4">
                <?php // echo $ans['body']; 
                  ?>
                </td> -->
            <td class="px-6 py-4">
              <?php echo $ans['price']; ?>
            </td>

            <td class="px-6 py-4">
              <button id="dropdownDividerButton<?php echo $ans['productId']; ?>"
                data-dropdown-toggle="dropdownDivider<?php echo $ans['productId']; ?>"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Action</button>
            </td>
            <!-- Dropdown menu -->
            <div id="dropdownDivider<?php echo $ans['productId']; ?>"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                <li>
                  <a href="#" type="button" data-modal-target="editUserModal<?php echo $ans['productId']; ?>"
                    data-modal-show="editUserModal<?php echo $ans['productId']; ?>"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit
                    Product</a>
                </li>
                <li>
                  <a href="deleteproduct.php?pid=<?php echo $ans['productId']; ?>" type="button"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    onclick="return confirm('Are you sure !') ">Delete</a>
                </li>

            </div>
          </tr>

          <!-- Edit user modal -->
          <div id="editUserModal<?php echo $ans['productId']; ?>" aria-hidden="true"
            class=" fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div
              class="relative w-full bg-white max-w-2xl max-h-full relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal content -->
              <form action="handleproduct.php" method="post" class="relative bg-white rounded-lg shadow dark:bg-gray-700" enctype="multipart/form-data">
                <input type="hidden" name="Work" value="edit">

                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Product
                  </h3>
                  <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="editUserModal<?php echo $ans['productId']; ?>">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                  <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                      Name</label>
                    <input type="hidden" name="productId" value="<?php echo $ans['productId']; ?>">
                    <input type="text" id="email" name="pname"
                      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                      value="<?php echo $ans['productName']; ?>" required>
                  </div>
                  <!-- <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                      Category</label>
                    <input type="text" id="password" name="category"
                      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                      value="<?php echo $ans['type']; ?>" required>
                  </div> -->
                  <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                      Price</label>
                    <input type="text" id="password" name="price"
                      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                      value="<?php echo $ans['price']; ?>" required>
                  </div>
                  <div class="mb-6">
                    <label for="repeat-password"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                    <input type="text" name="desc" id="repeat-password"
                      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                      value="<?php echo $ans['body']; ?>" required>
                  </div>
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                    Product Image</label>
                  <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file" name="image">

                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <input type="submit" value="Update Product"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                </div>
              </form>
            </div>
          </div>
    </div>
    <?php
        } ?>

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


  </table>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
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