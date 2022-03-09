<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Form Validator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <div class="container">
      <h1>Đăng ký</h1>
      <!-- action="/BTL_NHOM10/?controller=user&acction=register" -->
      <form action="../?controller=user&acction=register" method="POST" onsubmit="return Kt()" >
        <!-- <div class="form-control" hidden>
          <input type="text" id="username" placeholder="Tên đăng nhập" />
          <span></span>
          <small></small>
        </div> -->
        <div class="form-control">
          <input type="email" id="email" name="email" placeholder="Email" />
          <span></span>
          <small></small>
        </div>
        <div class="form-control">
          <input type="password" id="password" name="password" placeholder="Mật khẩu"/>
          <span></span>
          <small></small>
        </div>
        <div class="form-control">
          <input
            type="password"
            id="password2"
            placeholder="Nhập lại mật khẩu"
          />
          <span></span>
          <small></small>
        </div>
        <input type="submit" value="Đăng ký"   />
        <div class="signup_link">Bạn đã có tài khoản? <a href="/BTL_NHOM10/?controller=user&acction=loginView">Đăng nhập</a></div>
      </form>
    </div>

    <script src="javascript/register.js"></script>
  </body>
</html>
