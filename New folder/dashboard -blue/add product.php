<!Doctype HTML>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/form.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Inter", Arial, Helvetica, sans-serif;
    }

    .formbold-mb-5 {
      margin-bottom: 20px;

    }

    .formbold-mb-5 textarea {
      border-radius: 10px;
    }

    .formbold-pt-3 {
      padding-top: 12px;
    }


    .formbold-form-wrapper {
      padding: 60px;
    }

    .formbold-form-label-2 {
      font-weight: 600;
      font-size: 20px;
      margin-bottom: 20px;
    }

    .formbold-form-input {
      width: 100%;
      padding: 12px 24px;
      border-radius: 6px;
      border: 1px solid #e0e0e0;
      background: white;
      font-weight: 500;
      font-size: 16px;
      color: #6b7280;
      outline: none;
      resize: none;
    }

    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-btn {
      text-align: center;
      font-size: 16px;
      border-radius: 6px;
      padding: 14px 32px;
      border: none;
      font-weight: 600;
      background-color: #6a64f1;
      color: white;
      width: 100%;
      cursor: pointer;
    }

    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold--mx-3 {
      margin-left: -12px;
      margin-right: -12px;
    }

    .formbold-px-3 {
      padding-left: 12px;
      padding-right: 12px;
    }

    .flex {
      display: flex;
    }

    .flex-wrap {
      flex-wrap: wrap;
    }

    .w-full {
      width: 100%;
    }

    .uploadOuter {
      text-align: center;
      padding: 20px;

      strong {
        padding: 0 10px;
      }
    }

    .dragBox {
      width: 250px;
      height: 100px;
      margin: 0 auto;
      position: relative;
      text-align: center;
      font-weight: bold;
      line-height: 95px;
      color: #999;
      border: 2px dashed #ccc;
      display: inline-block;
      transition: transform 0.3s;

      

    }
    input[type="file"] {
        position: absolute;
        height: 100%;
        width: 100%;
        opacity: 0;
        top: 0;
        left: 0;
      }

    .draging {
      transform: scale(1.1);
    }

    #preview {
      text-align: center;
      display: flex;
     
    }
    img {
        width:200;
      }

    .uploding {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    @media (min-width: 540px) {
      .sm\:w-half {
        width: 50%;
      }
    }
  </style>
</head>

<body>
  <div id="mySidenav" class="sidenav">
    <p class="logo"><span>Apna</span>Mart</p>
    <a href="index.html" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="customer.html" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
    <a href="order_history.html" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
    <a href="product.html" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Products</a>
    <a href="#" class="icon-a"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Logout</a>

  </div>

  <div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->

    <div class="formbold-form-wrapper box" enctype="multipart/form-data">
      <h2 style="color: #fff; text-align: center; margin-bottom: 14px; font-weight: 700; letter-spacing: 1px;">Add your
        Product category and necessary information from here</h2>

      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label"> Product Name </label>
        <input type="text" name="name" id="name" placeholder="Enter Product Name" class="formbold-form-input" />
      </div>
      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label"> Product Category </label>
        <input type="text" name="phone" id="phone" placeholder="Enter Product Category" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-5">
        <label for="text-area" class="formbold-form-label"> Product Description</label>
        <textarea name="Product Description" id="" cols="30" rows="5"></textarea>
      </div>

      <label for="text-area" class="formbold-form-label"> Upload Product Image</label>
      <div class="uploding">
        <div class="uploadOuter">
          
          <label for="uploadFile" class="btn btn-primary">Upload Image</label>
          <strong>OR</strong>
          <span class="dragBox">
            Drag and Drop image here
            <input type="file" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()" id="uploadFile" />
          </span>
        </div>
        <div id="preview"></div>
      </div>


      <div class="button">
        <button class="formbold-btn">Save</button>
      </div>
      </form>
    </div>
  </div>


  <script>
    "use strict";
    function dragNdrop(event) {
      var fileName = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("preview");
      var previewImg = document.createElement("img");
      previewImg.setAttribute("src", fileName);
      previewImg.setAttribute("width", "200px");
      preview.innerHTML = "";
      preview.appendChild(previewImg);
    }
    function drag() {
      document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
    }
    function drop() {
      document.getElementById('uploadFile').parentNode.className = 'dragBox';
    }
  </script>
</body>

</html>