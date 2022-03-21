<?php
include_once "Views/admin/header.php";
?>

<body>

    <div class="container ">

        <h3 class="text-center mt-5">Manager Vaccine</h3>
        <table class="table mt-5">

    </div>

    <a class="btn btn-dark mt-5" href="/BTL_NHOM10/?controller=Managervaccine&acction=loadAddView" role="button">Add Vaccine</a>
    <thead>

        <tr>
            <th>id</th>
            <th>idVaccine</th>
            <th>Số lượng</th>
            <th>Địa chỉ tiêm</th>
           

            
        </tr>
    </thead>
    <tbody>
       
        <?php
        foreach ($data as $value) {
        ?>
            <tr>
                <th scope="row"><?php echo $value['id']  ?></th>
                <th scope="row"><?php echo $value['idVaccine']  ?></th>
                <th scope="row"><?php echo $value['number']  ?></th>
                <th scope="row"><?php echo $value['address']  ?></th>
               
            </tr>

        <?php
        }
        ?>
    </tbody>
    </table>
    <?php
    include_once "Views/admin/footer.php";
    ?>