<?php
require "./Views/header.php";
?>



<div class="container">



  <div class="row">
    <div class="col-lg-12 new__wrap">
      <a href="#" class="new">
        <img src="https://www.thegioimaychu.vn/blog/wp-content/uploads/2021/07/TheGioiMayChu-Blog-Image.jpg" alt="">
        <span>Vì sao chưa thể bỏ khái niệm F0, F1?</span>
      </a>
    </div>
  </div>

  <div class="row mt-3 category__wrap">

    <div class="col-xl-7 col-md-12 mb-3">


      <?php
      for ($i = 0; $i < (count($data) * 4/7); $i++) {
      ?>
        <a class="category-left" href="/BTL_NHOM10/?controller=post&acction=details&id=<?php echo $data[$i]['id']  ?>" style="text-decoration: none ;">
          <img src="<?php echo $data[$i]['img']  ?>" alt="" >
          <div class="category-leftR" style=" padding-left: 10px" class="title1">
            <h5 style="color: #000;"><?php echo $data[$i]['Title']  ?></h5>
            <span style="color: #000;"><?php echo $data[$i]['paragraph']  ?></span>
          </div>

        </a>

      <?php
      }
      ?>

    </div>
    <div class="col-xl-5 col-sm-12 mb-3">
    <?php
      for ($i; $i < count($data); $i++) {
      ?>
        <a class="category-left mb-5 mt-3" href="/BTL_NHOM10/?controller=post&acction=details&id=<?php echo $data[$i]['id']  ?>" style="text-decoration: none ;">
          <img src="<?php echo $data[$i]['img']  ?>" alt="">
          <div class="category-leftR" style=" padding-left: 10px">
            <h5 style="color: #000;"><?php echo $data[$i]['Title']  ?></h5>
            <span style="color: #000;"><?php echo $data[$i]['paragraph']  ?></span>
          </div>

        </a>

      <?php
      }
      ?>
    </div>


  </div>
</div>
<div class="container mt-5"></div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
</div> -->


<?php
require "./Views/footer.php";

?>