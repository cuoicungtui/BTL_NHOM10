<?php
if(isset($_SESSION['User'])){

?>
<script type="text/javascript">
  $.ajax({
    type: "POST",
    url: "/BTL_NHOM10/?controller=user&acction=userData",
    data: {},
    success: function (response) {
      alert(response)
    }
  });
  
</script>

<?php

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SỨC KHỎE MÙA DỊCH</title>
  <link rel="stylesheet" href="./Views/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a href="/BTL_NHOM10/?controller=user&acction=index" class="header__logo">
        <img src="./Views/img/logo.png" alt="" class="image">
        <div class="header__title">
          <span>SỨC KHỎE MÙA DỊCH</span>
        </div>
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class='bx bxs-grid'></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link" href="/BTL_NHOM10/?controller=declare&acction=form1View">Khai báo y tế</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/BTL_NHOM10/?controller=Vaccine&acction=form2View">Đăng ký tiêm</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tra cứu
            </a>
            <ul class="dropdown-menu mb-3" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">Chứng nhận tiêm</a></li>
              <li><a class="dropdown-item btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" href="#">Kết quả đăng ký tiêm</a></li>
            </ul>
          </li>
          <li class="nav-item nav__avatar">
            <img class="nav__img" src="./Views/img/no-avatar.png" alt="">
          </li>
          <div class="avatar__wrap hide">
            <div class="avatar__item"><a href="/BTL_NHOM10/?controller=user&acction=LoadUser">Trang cá nhân</a></div>
            <?php
            if (!isset($_SESSION['User']))
              echo '<div class="avatar__item"><a href="/BTL_NHOM10/?controller=user&acction=loginView">Đăng nhập</a></div>';
            else {

              echo '<div class="avatar__item"><a href="/BTL_NHOM10/?controller=user&acction=logout">Đăng xuất</a></div>';
            ?>
           
            <?php
            }
            ?>



          </div>
        </ul>
      </div>
    </div>
  </nav>

<?php
  if(isset($_SESSION['User'])){
?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chứng nhận tiêm chủng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal__header">
          <img src="./Views/img/logo.png" alt="">
          <p class="mt-3">ĐÃ TIÊM <strong>2</strong> MŨI VẮC XIN</p>
          <img class="QR__code" src="./Views/img/qrcode.png" alt="">
        </div>
        <h6>Thông tin cá nhân</h6>
        <div class="form mt-3">
          <div class="form__wrap">
            <div class="form__icon">
              <i class='bx bxs-user'></i>
            </div>
            <div class="form__content">
              <span>Họ tên</span>
              <p>Ngô Văn Tùng</p>
            </div>
          </div>
          <div class="form__wrap">
            <div class="form__icon">
              <i class='bx bxs-calendar'></i>
            </div>
            <div class="form__content">
              <span>Ngày sinh</span>
              <p>18/03/2001</p>
            </div>
          </div>
          <div class="form__wrap">
            <div class="form__icon">
              <i class='bx bxs-calendar-event'></i>
            </div>
            <div class="form__content">
              <span>Số CMND/CCCD</span>
              <p>6868686868686868</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chứng nhận tiêm chủng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal__header mb-3">
          <img src="./Views/img/logo.png" alt="">
          <p class="mt-3">ĐÃ TIÊM <strong>2</strong> MŨI VẮC XIN</p>
          <img class="QR__code" src="./Views/img/qrcode.png" alt="">
        </div>
        <h6>Danh sách lịch sử đăng ký tiêm</h6>
        <div class="form mt-3">
          <div class="form__wrap">
            <div class="form-left">
              <div class="date1">20</div>
              <div class="date2">10/2021</div>
              <div class="check-active">Chưa duyệt</div>
              <div class="check-active hide">Đã duyệt</div>
            </div>
            <div class="form-right">
              <div class="form__right-title">
                <i class='bx bxs-user'></i>
                <span>Ngô Văn Tùng</span>
              </div>
              <div class="form__right-title">
                <i class='bx bxs-calendar'></i>
                <span>18/03/2001</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php

  }
?>
