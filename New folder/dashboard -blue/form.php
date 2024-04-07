<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="css/form.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Apna</span>Mart</p>
  <a href="index.html" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="customer.html"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="order_history.html"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="product.html"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Products</a>
  <a href="#"class="icon-a"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Logout</a>

</div>

<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  
  <div class="formbold-form-wrapper">
   <h1 style="color: #fff; text-align: center; margin-bottom: 5px;">Update Profile Details</h1>
   
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label"> Full Name </label>
        <input
          type="text"
          name="name"
          id="name"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label"> Phone Number </label>
        <input
          type="text"
          name="phone"
          id="phone"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label"> Email Address </label>
        <input
          type="email"
          name="email"
          id="email"
          class="formbold-form-input"
        />
      </div>
      

      <div class="formbold-mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-2">
          Address Details
        </label>
        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input
                type="text"
                name="area"
                id="area"
                class="formbold-form-input"
              />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input
                type="text"
                name="city"
                id="city"
                class="formbold-form-input"
              />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input
                type="text"
                name="state"
                id="state"
                class="formbold-form-input"
              />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input
                type="text"
                name="post-code"
                id="post-code"
                class="formbold-form-input"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="button">
        <button class="formbold-btn">Save</button>
      </div>
    </form>
  </div>
</div>
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
  .formbold-pt-3 {
    padding-top: 12px;
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
  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }
</style>