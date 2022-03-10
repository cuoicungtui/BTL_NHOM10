<?php
require "./Views/header.php";
?>
<!-- <?php
      // require "header.php";
      ?> -->

<div class="container bg-white" style="box-shadow: 2px 2px 10px 3px rgba(0, 0, 0, 0.06);">
  <div class="row">
    <div class="col-md-12">
       <p><?php echo ($data[0][0]['date']); ?></p>
      <h2 class="mb-3 mt-3"><?php echo ($data[0][0]['Title']); ?></h2>
     
      <?php
      foreach ($data[1] as $value) {

        
      ?>
        <h5><?php echo ($value['h1']); ?></h5>
        <div class="image" style="text-align:center;">
          <img src="<?php echo ($value['img']); ?>" alt="" class="mb-3 mt-3" width="70%" height="auto">
          <p><?php echo ($value['imgName']); ?></p>
        </div>

        <p><?php echo ($value['p']); ?></p>
      <?php
      }
      ?>

     
      <!-- footer -->



      <h5 class="d-flex justify-content-center mt-5">Có sức khỏe là có tất cả</h5>
      <div class="contact">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ad illo labore unde nihil vel eos, modi distinctio</p>
        <p>
          Nguồn:
          <a href="https://www.baogiaothong.vn/vi-sao-chua-the-bo-khai-niem-f0-f1-d544399.html" class="contact-link" style="text-decoration: none; color:#24a8d8">https://www.baogiaothong.vn/vi-sao-chua-the-bo-khai-niem-f0-f1-d544399.html</a>
        </p>
        <div class="contact-sdt">Hotline hỗ trợ: (+84) 123 456 789</div>
        <p>
          Website hỗ trợ:
          <a href="#" class="contact-link" style="text-decoration: none; color:#24a8d8">TRUNG TÂM CHĂM SÓC KHÁCH HÀNG</a>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container mb-5">
  <div class="arrow" style="display: flex; justify-content: end;">
    <a style="text-decoration: none; margin-right: 20px;" href="/BTL_NHOM10/">
      <i class="bx bxs-left-arrow-circle" style="font-size: 45px; color:#24a8d8"></i>
    </a>
    <a style="text-decoration: none;" href="#">
      <i class="bx bxs-up-arrow-circle" style="font-size: 45px; color:#24a8d8"></i>
    </a>
  </div>
</div>

<?php
require "./Views/footer.php";
// require "footer.php";

?>