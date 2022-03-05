<?php
include_once "Views/admin/header.php";
?>

<body>

    <div class="container ">

        <h3 class="text-center mt-5">Accout Admin</h3>
        <table class="table mt-5">

    </div>

    <a class="btn btn-dark mt-5" href="/BTL_NHOM10/Views/admin/accoutAddView.php" role="button">Add accout</a>
    <thead>
        
        <tr>
            <th>Id</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $value) {
        ?>
            <tr>
                <th scope="row"><?php echo $value['id']  ?></th>
                <td><?php echo $value['username']  ?></td>
                <td><?php echo $value['password'] ?></td>
                <td> <a href="/BTL_NHOM10/?controller=admin&acction=loadEditView&id=<?php echo $value['id'] ?>"> <i class="bi bi-pencil-square"></i> </a> </td>
                <td><a href="/BTL_NHOM10/?controller=admin&acction=delete_admin&id=<?php echo $value['id'] ?>"><i class="bi bi-trash-fill"></i></a></td>
            </tr>

        <?php
        }
        ?>


    </tbody>
    </table>
<?php
include_once "Views/admin/footer.php";
?>