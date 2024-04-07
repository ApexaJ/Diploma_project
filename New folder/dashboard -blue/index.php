
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="material-design-iconic-font.min.css">
    <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="login/style.css">
</head>
<body>

    <div class="main">

          <!-- Sign in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="login/signin-image.jpg" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>
                        <form action="login/adminlogin.php" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="fa-solid fa-user"></i></label>
                                <input type="email" name="email" id="your_name" required placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="fa-solid fa-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" required placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                               <input type="submit" class="btn1" value="Login" style="cursor:pointer;">
                              
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS --><script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>

</body>
</html>
