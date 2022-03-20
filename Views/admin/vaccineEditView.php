<?php
include_once "Views/admin/header.php";
?>

<div class="container mt-5">
    <h3 class="text-center mt-5">Add Vaccne</h3>

    <Form  id="addVaccine" method="Post" onsubmit="return check1()" >

         <div class="mb-3 col-6">
            <label for="=name" class="form-label">ID Vaccine</label>
            <input type="text" class="form-control" id="idVaccine" name="idVaccine" placeholder="idVaccine" required value="<?php echo $_GET['id'] ?>" readonly>
        </div>
        <div class="row">

            <div class="mb-3 col-6">
                <label for="=name" class="form-label">Name Vaccine</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name Vaccine" required value="<?php echo $data[0]['name'] ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="index" class="form-label">Xuất xứ</label>
                <input type="text" class="form-control" id="made" name="made" required value="<?php echo $data[0]['made'] ?>">
            </div>

        </div>

        <div class="mb-3">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="index" class="form-label">Tuổi bắt đầu</label>
                    <input type="number" class="form-control" id="startAge" name="startAge" required min=3 max=80 value="<?php echo $data[0]['startAge'] ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="index" class="form-label">Tuổi kết thúc</label>
                    <input type="number" class="form-control" id="endAge" name="endAge" required min=3 max=100 value="<?php echo $data[0]['endAge'] ?>">
                </div>
            </div>

        </div>

        <div class="mb-3 ">
            <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
        </div>


    </Form>

    <script>
        
        function check1() {


            if (Number($('#startAge').val()) > Number($('#endAge').val())) {
                alert("Tuối kết thúc phải lơn hơn tuổi bắt đầu")
               return false
            }
            

            $.ajax({
                type: "POST",
                url: "/BTL_NHOM10/?controller=detailvaccine&acction=checkVaccine",
                data: {
                    name: $('#name').val()
                },
                success: function(response) {
                   if(response =='1'){
                   
                    $.ajax({
                        type: "POST",
                        url: "/BTL_NHOM10/?controller=detailvaccine&acction=vaccineEdit",
                        data: { 
                            name: $('#name').val() ,
                            made: $('#made').val() ,
                            startAge: $('#startAge').val(),
                            endAge: $('#endAge').val(),
                            idVaccine : $('#idVaccine').val()
                            },
                        success: function (res) {
                            
                        }
                    });

                    window.location.href = '/BTL_NHOM10/?controller=Detailvaccine&acction=loadVaccineView'

                   }else{
                       alert("Vaccine đã tồn tại")
                }
                }
            });
            
        }
        
    </script>
   

</div>
<?php
include_once "Views/admin/footer.php";
?>