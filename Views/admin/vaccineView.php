<?php
include_once "Views/admin/header.php";
?>

<body>

    <div class="container ">

        <h3 class="text-center mt-5">Vaccine</h3>
        <table class="table mt-5">

    </div>

    <a class="btn btn-dark mt-5" href="/BTL_NHOM10/?controller=Detailvaccine&acction=loadVaccineAdd" role="button">Add Vaccine</a>
    <thead>

        <tr>
            <th>idVaccine</th>
            <th>Name Vaccine</th>
            <th>Made Vaccine</th>
            <th>Start Age</th>
            <th>End Age</th>
            <th>Edit</th>
            <th>Delete</th>

            
        </tr>
    </thead>
    <tbody>
       
        <?php
        foreach ($data as $value) {
        ?>
            <tr>
                <th scope="row"><?php echo $value['idVaccine']  ?></th>
                <td><?php echo $value['name']  ?></td>
                <td><?php echo $value['made']  ?></td>
                <td><?php echo $value['startAge']  ?></td>
                <td><?php echo $value['endAge'] ?></td>  
                <td><a href="/BTL_NHOM10/?controller=Detailvaccine&acction=loadVaccineEdit&id=<?php echo $value['idVaccine'] ?>"><i class="bi bi-trash-fill"></i></a></td>
                <td> <a href="/BTL_NHOM10/?controller=Detailvaccine&acction=vaccineDelete&id=<?php echo $value['idVaccine'] ?>"> <i class="bi bi-three-dots-vertical"></i> </a> </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
    </table>
    <?php
    include_once "Views/admin/footer.php";
    ?>