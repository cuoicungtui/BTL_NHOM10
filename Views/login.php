<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Form Validator</title>
    <link rel="stylesheet" href="./Views/css/register.css" />
  </head>
  <body>
    <div class="container">
      <h1>Đăng nhập</h1>
      <form action="/BTL_NHOM10/?controller=user&acction=login" method="POST">
        <div class="form-control">
          <input type="email" id="email" name="email" placeholder="Email" required />
          <span></span>
          <?php
           if(isset($err)){

              if($err==1)
                  echo  '<small> Email does not exist </small>';
           }
          
          ?>
         
          
        </div>
        <div class="form-control">
          <input type="password" id="password" name="password" placeholder="Mật khẩu" required/>
          <span></span>
          <?php
           if(isset($err)){

              if($err==2)
                  echo  '<small> Incorrect password </small>';
           }
          
          ?>
          <small></small>
        </div>
        <input type="submit" value="Đăng Nhập" />
        <div class="signup_link">Bạn chưa có tài khoản? <a href="./Views/register.php">Đăng ký</a></div>
      </form>


      
    </div>

  </body>
</html>
