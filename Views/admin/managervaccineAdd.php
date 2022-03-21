<?php
include_once "Views/admin/header.php";
?>

<div class="container mt-5">
    <h3 class="text-center mt-5">Thêm số lượng Vaccne</h3>

    <Form action="/BTL_NHOM10/?controller=Managervaccine&acction=add" id="addVaccine" method="Post">

        <div class="row ms-5">

            <div class="mb-3 col-6">
                <label for="index" class="form-label">Name Vaccine</label>
                <select name="id_vaccine" id="id_vaccine" class="form-select">

                <?php
                foreach($data as $value){
                    ?>
                <option value="<?php echo $value['idVaccine']  ?>"><?php echo $value['name']  ?></option>
                    <?php
                }

                ?>
                    
                    
                </select>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="index" class="form-label">Số lượng</label>
                        <input type="number" class="form-control" id="quality" name="quality" required min=0>
                    </div>

                </div>

            </div>


            <div class="mb-3 col-6">
                <label for="index" class="form-label">Địa chỉ tiêm</label>
                <input type="text" class="form-control" id="address" name="address" required address>
            </div>
            <div class="mb-3 ">
                <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
            </div>


        </div>


    </Form>

    <?php
    include_once "Views/admin/footer.php";
    ?>