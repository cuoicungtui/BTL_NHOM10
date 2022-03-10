
<?php
  if(!isset($_SESSION['User'])){
    header('location:/BTL_NHOM10/?controller=user&acction=loginView');
  }
?>
<?php
  require "./Views/header.php";
?>


  <div class="container">
      <form action="/BTL_NHOM10/?controller=vaccine&acction=form2Submit"  method="Post">
        <div class="row">
          <div class="col">
            <div class="title">
              <h3>ĐĂNG KÝ TIÊM COVID-19</h3>
              <span>( PHÒNG CHỐNG DỊCH COVID-19 )</span>
              <p>Khuyến cáo: Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <select class="form-select" name="Number_vaccine" aria-label="Default select example">
              <option value="1">Mũi tiêm thứ nhất</option>
              <option value="2">Mũi tiêm thứ hai</option>
              <option value="3">Mũi tiêm thứ ba</option>
            </select>
          </div>
        </div>
      <div class="row mt-3">
        <div class="col-lg-6">
          Họ và tên
          <input type="text" id="name" class="form-control" name="name" value="<?php echo $data[0]['Name'] ?>" required placeholder="Họ và tên">
          <span id="loiten"></span>
        </div>
        <div class="col-lg-6">
          Số hộ chiếu / CMND / CCCD
          <input type="text" id="cccd" class="form-control" required name="CCCD" value="<?php echo $data[0]['CCCD'] ?>"  placeholder="Số hộ chiếu / CMND / CCCD">
          <span id="loi_cccd"></span>
        </div>
      </div>
  
      <div class="row mt-3 mb-3">
        <div class="col-sm-6 col-lg-4">
          <span>Năm sinh</span>
          <input type="date" id="years" class="form-control" name="NS" value="<?php echo $data[0]['birthday'] ?>" required placeholder="Năm sinh">
          <span></span>
        </div>
        <div class="col-sm-6 col-lg-4">
          <p class="sex">Giới tính</p>
          <div class="radio-sex">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gioitinh" id="nam" value="1" checked>
              <label class="form-check-label" for="nam">Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gioitinh" id="nu" value="0">
              <label class="form-check-label" for="nu">Nữ</label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <span>Quốc tịch</span>
          <input type="text" id="nation" class="form-control" required placeholder="Quốc tịch">
          <span></span>
        </div>
      </div>
  
      <span class="title-bold mt-3">Địa chỉ tại Việt Nam</span>
      
      <div class="row mt-3">
        <div class="col-sm-6 col-lg-4">
          Tỉnh/Thành phố
          <input type="text" class="form-control" id="tinh" name="city/province" value="<?php echo $data[0]['city_province'] ?>" required placeholder="Tỉnh/Thành phố">
          <span></span>
        </div>
        <div class="col-sm-6 col-lg-4">
          Quận/Huyện
          <input type="text" class="form-control" id="huyen" name="District" value="<?php echo $data[0]['District'] ?>" required placeholder="Quận/Huyện">
          <span></span>
        </div>
        <div class="col-sm-6 col-lg-4">
          Phường/Xã
          <input type="text" class="form-control" id="xa" required placeholder="Phường/Xã">
          <span></span>
        </div>
      </div>
  
      <div class="row mt-3">
        <div class="col-6">
          Địa chỉ hiện tại
          <input type="text" class="form-control" id="sonha" required placeholder="Địa chỉ hiện tại">
          <span></span>
        </div>
        <div class="col-6">
          Số thẻ BHYT
          <input type="text" class="form-control" id="bhyt" name="BHYT" value="<?php echo $data[0]['BHYT_number'] ?>" required placeholder="Số thẻ BHYT">
          <span></span>
        </div>
      </div>
  
      <div class="row mt-3">
        <div class="col-xs-12 col-lg-6">
          Số điện thoại
          <input type="number" id="sdt" class="form-control" name="SDT" value="<?php echo $data[0]['SDT'] ?>" required placeholder="Số điện thoại">
          <span id="loi_sdt"></span>
        </div>
        <div class="col-xs-12 col-lg-6">
          Email
          <input type="email" ìd="email" class="form-control" value="<?php echo $data[0]['Email'] ?>" readonly required placeholder="Email">
          <span></span>
        </div>
      </div>
  
      <div class="row mt-3">
        <div class="col-6">
          Tiểu sử bệnh nền
          <input type="text" class="form-control" id="benhnen" required placeholder="Bệnh nền">
          <span></span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-lg-6">
          Ngày bắt đầu đăng ký
          <input type="date" id="date_start" name="date_start" class="form-control" required placeholder="Ngày/Tháng/Năm">
        </div>
        <div class="col-lg-6">
          Ngày kết thúc đăng ký
          <input type="date" id="date_end" name="date_end" class="form-control" required placeholder="Ngày/Tháng/Năm">
        </div>
      </div>
  

      <div class="title-b mt-5">
        <span>
          Dữ liệu bạn cung cấp hoàn toàn bảo mật và chỉ phục vụ cho việc phòng chống dịch, thuộc quyền quản lý của Ban chỉ đạo quốc gia về phòng chống dịch Covid-19
        </span>
        <span>Khi bạn nhấn nút "Gửi" là bạn dã hiểu và đồng ý</span>
      </div>
  
      <div class="Btn">
        <button type="submit" onclick=" kiemtra()" class="button">Gửi</button>
      </div>

    </form>
  </div>
  <?php
  require "./Views/footer.php";

  ?>