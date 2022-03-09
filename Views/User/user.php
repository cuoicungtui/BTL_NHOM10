<?php
  if(!isset($_SESSION['User'])){
    header('location:/BTL_NHOM10/?controller=user&acction=index');
  }

?>

<?php
require "./Views/header.php";
?>
<div class="container">
    <h2 class="text-center mt-8">Thông tin cá nhân </h2>
    <div class="row">
        <div class="col-xl-4 col-sm-12 d-flex justify-content-center align-items-center">
            <img src="<?php echo $data[0]['Avatar'] ?>" width="250px" height="250px" style="object-fit: cover;" alt="" class="rounded-circle" class="">
        </div>
        <div class="col-xl-8 col-sm-12">
            <form action="http://localhost/BTL_NHOM10/?controller=User&acction=UpdateUser" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-10">
                        <label for="name" class="col-sm-2 col-form-label ">Họ và tên</label>
                        <input type="text " name="name" class="form-control " id="name" value="<?php echo $data[0]['Name'] ?>" placeholder="Họ và tên">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <label for="datetime" class="col-sm-2 col-form-label col-3">Năm sinh</label>
                        <input type="date" class="form-control col-4" id="datetime" name="NS" value="<?php echo $data[0]['birthday'] ?>" placeholder="Năm sinh">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <label for="number" class="col-sm-2 col-form-label col-3">Số CMND/CCCD</label>
                        <input type="number" class="form-control col-4" id="number" name="CCCD" value="<?php echo $data[0]['CCCD'] ?>" required placeholder="Số CMND/CCCD">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <label for="number" class="col-sm-2 col-form-label col-3">Số thẻ BHYT</label>
                        <input type="number" class="form-control col-4" id="number" name="BHYT" value="<?php echo $data[0]['BHYT_number'] ?>" required placeholder="Số thẻ BHYT">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="" class="">
                            Giới tính
                        </label>

                        <?php
                        if ($data[0]['sex'] == 1) {
                        ?>

                            <div class="form-check form-check-inline col-1">

                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" checked="checked">
                                <label class="form-check-label" for="inlineRadio1">Nam</label>
                            </div>
                            <div class="form-check form-check-inline col-6">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="form-check form-check-inline col-1">

                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" >
                                <label class="form-check-label" for="inlineRadio1">Nam</label>
                            </div>
                            <div class="form-check form-check-inline col-6">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0"checked="checked">
                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                            </div>

                        <?php

                        }

                        ?>


                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <label for="number" class="col-sm-2 col-form-label col-3">Số điện thoại</label>
                        <input type="number" class="form-control col-4" id="number" name="SDT" value="<?php echo $data[0]['SDT'] ?>" required placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <label for="mail" class="col-sm-2 col-form-label col-3">Email</label>
                        <input type="email" class="form-control col-4" id="mail" value="<?php echo $data[0]['Email'] ?>" required placeholder="Email" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <label for="text" class="col-sm-2 col-form-label col-3">Tỉnh/Thành phố</label>
                        <input type="text" class="form-control col-4" id="text" name="city/province" value="<?php echo $data[0]['city_province'] ?>" required placeholder="Tỉnh/thành phố">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <label for="text" class="col-sm-2 col-form-label col-3">Huyện</label>
                        <input type="text" class="form-control col-4" id="text" name="District" value="<?php echo $data[0]['District'] ?>" required placeholder="Huyện">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <label for="text" class="col-sm-2 col-form-label col-3">Up Avata</label>
                        <input type="file" class="form-control col-4" id="AVT" name="AVT"  accept="image/png, image/jpeg"  >
                    </div>
                </div>
                <div class="d-grid gap-2 col-2 mx-auto mt-3">
                    <button class="btn btn-primary" id="btn-update" type="submit">Lưu lại</button>
                </div>
            </form>
        </div>
    </div>

  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
require "./Views/footer.php";
?>