
<?php
  if(!isset($_SESSION['User'])){
    header('location:/BTL_NHOM10/?controller=user&acction=index');
  }

?>

<?php
  require "./Views/header.php";
?>



  <div class="container">
    <form action="/BTL_NHOM10/?controller=declare&acction=form1Submit" method="Post">
      <div class="row">
        <div class="title">
          <h3>THÔNG TIN KHAI BÁO Y TẾ</h3>
          <span>( PHÒNG CHỐNG DỊCH COVID-19 )</span>
          <p>Khuyến cáo: Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</p>
        </div>
        <div class="col-lg-6">
          Họ và tên
          <input type="text" id="name" class="form-control" name="name" value="<?php echo $data[0]['Name'] ?>" required placeholder="Họ và tên">
          <span id="loiten"></span>
        </div>
        <div class="col-lg-6">
          Số hộ chiếu / CMND / CCCD
          <input type="text" id="cccd" class="form-control" name="CCCD" value="<?php echo $data[0]['CCCD'] ?>" required placeholder="Số hộ chiếu / CMND / CCCD">
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
              <input class="form-check-input" type="radio" name="gioitinh" id="nam" value="nam" checked>
              <label class="form-check-label" for="nam">Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gioitinh" id="nu" value="nu">
              <label class="form-check-label" for="nu">Nữ</label>
            </div>
            <!-- <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gioitinh" id="khac" value="khac" >
              <label class="form-check-label" for="khac">Khác</label>
            </div> -->
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
          Quận/huyện
          <input type="text" class="form-control" id="huyen" name="District" value="<?php echo $data[0]['District'] ?>" required placeholder="Quận/huyện">
          <span></span>
        </div>
        <div class="col-sm-6 col-lg-4">
          Phường/Xã
          <input type="text" class="form-control" id="xa" required placeholder="Phường/Xã">
          <span></span>
        </div>
      </div>
  
      <div class="row mt-3">
        <div class="col">
          Số nhà, phố, tổ dân phố\thôn\xóm
          <input type="text" class="form-control" id="sonha" required placeholder="Số nhà, phố, tổ dân phố\thôn\xóm">
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
          <input type="email" ìd="email" class="form-control" value="<?php echo $data[0]['Email'] ?>" required placeholder="Email" readonly >
          <span></span>
        </div>
      </div>
  
      <div class="row mt-3">
        <div class="col">
          <span class="title-bold">Trong vòng 14 ngày qua, Anh/Chị có đến tỉnh/thành phố, quốc gia/vùng lãnh thổ nào (Có thể đi qua nhiều nơi)</span>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="checkYN1" id="" value="1" checked>
            <label class="form-check-label" for="inlineRadio1">Không</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="checkYN1" id="" value="0">
            <label class="form-check-label" for="inlineRadio2">Có</label>
          </div>
        </div>
      </div>
  
      <div class="row mt-3">
        <div class="col">
          <span class="title-bold">Trong vòng 14 ngày qua, Anh/Chị có thấy xuất hiện ít nhất 1 trong các dấu hiệu: sốt, ho, khó thở, viêm phổi, đau họng, mệt mỏi không?</span>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="checkYN2" id="" value="1" checked>
            <label class="form-check-label" for="inlineRadio1">Không</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="checkYN2" id="" value="0">
            <label class="form-check-label" for="inlineRadio2">Có</label>
          </div>
        </div>
      </div>
  
      <div class="row mt-3">
        <span class="title-bold">Trong vòng 14 ngày qua Anh/Chị có tiếp xúc với:</span>
        <div class="col mt-3">
          <table class="table">
            <thead class="table-light">
              <td></td>
              <td>Có</td>
              <td>Không</td>
            </thead>
            <tbody>
              <td>Người bệnh hoặc nghi ngờ mắc bệnh COVID-19</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checkYN3" value="1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Có
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checkYN3" value="0" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Không
                  </label>
                </div>
              </td>
            </tbody>
            <tbody>
              <td>Người từ nước có bệnh COVID-19</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checkYN4" value="1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Có
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checkYN4" value="0" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Không
                  </label>
                </div>
              </td>
            </tbody>
            <tbody>
              <td>Người có biểu hiện (Sốt, ho, khó thở, Viêm phổi)
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checkYN5" value="1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Có
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checkYN5" checked value="0">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Không
                  </label>
                </div>
              </td>
            </tbody>
          </table>
        </div>
      </div>
  
      <div class="title-b mt-3">
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