<?php
include_once "Views/admin/header.php";
?>

<body>

    <div class="container ">

        <h3 class="text-center mt-5">Accout Admin</h3>
        <table class="table mt-5">

    </div>

    <a class="btn btn-dark mt-5" href="/BTL_NHOM10/Views/admin/accoutAddView.php" role="button">Add post</a>
    <thead>

        <tr>
            <th>Id</th>
            <th>image</th>
            <th>Title</th>
            <th>Pragraph</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Conten</th>
        </tr>
    </thead>
    <tbody>
       
        <?php
        foreach ($data as $value) {
        ?>
            <tr>
                <th scope="row"><?php echo $value['id']  ?></th>

                <td><?php echo $value['Title']  ?></td>
                <td><?php echo $value['img'] ?></td>
                <td><?php echo $value['paragraph']  ?></td>
                <td><?php echo $value['date'] ?></td>
                <td> <a href="/BTL_NHOM10/&id=<?php echo $value['id'] ?>"> <i class="bi bi-pencil-square"></i> </a> </td>
                <td><a href="/BTL_NHOM10/&id=<?php echo $value['id'] ?>"><i class="bi bi-trash-fill"></i></a></td>
                <td> <a href="/BTL_NHOM10/?&id=<?php echo $value['id'] ?>"> <i class="bi bi-pencil-square"></i> </a> </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
    </table>
    <?php
    include_once "Views/admin/footer.php";
    ?>